// Hides and unhides the HTML elements with the specified names
//
// @param a_ElementsToHide HTML ID of the element to hide as string
//                         or an array of IDs as strings
// @param a_ElementsToShow HTML ID of the element to make visible
//                         as string or an array of IDs as strings
function ToggleVisibility(a_ElementsToHide, a_ElementsToShow)
{
  if (typeof(a_ElementsToHide) == 'object') { // array
    for (var i = 0; i < a_ElementsToHide.length(); ++i) {
      document.getElementById(a_ElementsToHide[i]).style.display = 'none';
    }
  } else if (typeof(a_ElementsToHide) == 'string') {
    document.getElementById(a_ElementsToHide).style.display = 'none';
  }
  
  if (typeof(a_ElementsToShow) == 'object') { // array
    for (var i = 0; i < a_ElementsToShow.length(); ++i) {
      document.getElementById(a_ElementsToShow[i]).style.display = 'block';
    }
  } else if (typeof(a_ElementsToShow) == 'string') {
    document.getElementById(a_ElementsToShow).style.display = 'block';
  }
}

// Adds a limitation of the maximum text length on a text area
// input, that is enforced by JS
//
// All previously assigned event handlers of the text area are preserved.
//
// @param TextAreaID HTML ID of the text area
// @param MaxLen Positive int specifying the maximum number of characters
//               that can be entered in the text area
function SetLenLimit(TextAreaID, MaxLen)
{
  var TextArea = document.getElementById(TextAreaID);
  if (TextArea == null) { CipLogError('SetLenLimit(): Input "' + TextAreaID + '" not found'); return; }

  EnforceLenLimitClosure = function()
  {
    if (TextArea.value.length > MaxLen) {
      TextArea.value = TextArea.value.substring(0, MaxLen);
    }
  };
  AddEventHandler(TextArea, 'onkeyup', EnforceLenLimitClosure);
  AddEventHandler(TextArea, 'onblur', EnforceLenLimitClosure);
}

// Installs an event handler on a text area input that dynamically updates
// a counter showing the remaining allowed number of characters
// 
// All previously assigned event handlers of the text area are preserved.
// 
// @param TextAreaID HTML ID of the text area
// @param CounterID HTML ID of the span or div element where the remaining
//                  number of characters will be put in
// @param MaxLen Positive int specifying the maximum number of characters
//               that can be entered in the text area
function SetRemainingLenCounter(TextAreaID, CounterID, MaxLen)
{
  var TextArea = document.getElementById(TextAreaID);
  if (TextArea == null) { CipLogError('SetLenLimit(): Text area input "' + TextAreaID + '" not found'); return; }
  var Counter = document.getElementById(CounterID);
  if (Counter == null) { CipLogError('SetLenLimit(): Counter input "' + CounterID + '" not found'); return; }
  
  UpdateCounterClosure = function()
  {
    Counter.innerHTML = MaxLen - TextArea.value.length;
  };
  AddEventHandler(TextArea, 'onkeyup', UpdateCounterClosure);
  AddEventHandler(TextArea, 'onblur', UpdateCounterClosure);
  TextArea.onkeyup();
}


// -------------------
// debugging functions
// -------------------

// Set to true to enable error logging
var EnableDebug = true;

// Default error logger, logs to the FireBug console
function CipLogError(ErrMsg)
{
  if (EnableDebug) console.error(ErrMsg);
}

// -------------------------
// internal helper functions
// -------------------------

// Adds a new event handler function to the specified event handler of
// a DOM object
// 
// The new event will be appended to the end of the call chain and
// will fire after the previous events have sucessfully completed.
// 
// @param Element DOM object that we want to add the event handler to
// @param EventHandlerName Name of the event handler function that we
//                         want to add the event to, e.g. 'onclick' or
//                         'onkeyup'
// @param Function New event handler to be added to the existing ones
function AddEventHandler(Element, EventHandlerName, Function)
{
  var EventHandler = Element[EventHandlerName];
  if (EventHandler) {
    Element[EventHandlerName] = function() { EventHandler(); Function(); };
  } else {
    Element[EventHandlerName] = Function;
  }
}


var g_ActiveCharacter = 0;

function FocusCharacter(a_CharacterNumber, a_CharacterName, a_NumberOfCharacters)
{
  // it it was clicked on the same row there is nothing to do
  if (a_CharacterNumber == g_ActiveCharacter) {
    return;
  } else {
    g_ActiveCharacter = a_CharacterNumber;
  }
  // reset other row lines
  for (var i = 1; i <= a_NumberOfCharacters; i++) {
    if (i != a_CharacterNumber && document.getElementById('CharacterRow_' + i) != null) {
      document.getElementById('PlayButtonOf_' + i).style.display = 'none';
      document.getElementById('CharacterNumberOf_' + i).style.display = 'inline';
      document.getElementById('CharacterRow_' + i).style.fontWeight = 'normal';
      document.getElementById('CharacterOptionsOf_' + i).style.display = 'none';
      document.getElementById('CharacterNameOf_' + i).style.fontSize = '10pt';
    }
  }
  // set the new selected line
  document.getElementById('PlayButtonOf_' + a_CharacterNumber).style.display = 'block';
  document.getElementById('CharacterNumberOf_' + a_CharacterNumber).style.display = 'none';
  document.getElementById('CharacterRow_' + a_CharacterNumber).style.fontWeight = 'bold';
  document.getElementById('CharacterOptionsOf_' + a_CharacterNumber).style.display = 'block';
  document.getElementById('CharacterNameOf_' + a_CharacterNumber).style.fontSize = '13pt';
  document.getElementsByName('selectedcharacter')[0].value = document.getElementById('CharacterNameOf_' + a_CharacterNumber).innerHTML;
}

function InRowWithOverEffect(a_RowID, a_Color) 
{
  document.getElementById(a_RowID).style.backgroundColor = a_Color;
}

function OutRowWithOverEffect(a_RowID, a_Color) 
{
  document.getElementById(a_RowID).style.backgroundColor = a_Color;
}

function InMiniButton(a_Button) 
{
  a_Button.src = JS_DIR_IMAGES + "account/play-button-over.gif";
}

function OutMiniButton(a_Button) 
{
  a_Button.src = JS_DIR_IMAGES + "account/play-button.gif";
}

// TibiaWebsite_flashclientrelease/html/account/?subtopic=play&name=First+Char
function EnablePlayButton() {
  l_Elements = document.getElementsByName("FlashClientPlayButton");
  for (i = 0; i < l_Elements.length; i++) {
    l_PlayLink = l_Elements[i].getAttribute("playlink");
    l_Elements[i].innerHTML = '<a href="' + l_PlayLink + '" onClick="openGameWindow(\'' + l_PlayLink + '\'); pageTracker._trackPageview(\'/account/account-overview/play\'); return false;" ><img style="border:0px;" onMouseOver="InMiniButton(this);" onMouseOut="OutMiniButton(this);" src="' + JS_DIR_IMAGES + 'account/play-button.gif" /></a>';
  }
}

function ShowHelperDiv(a_ID)
{
  document.getElementById(a_ID).style.visibility = 'visible'; 
  document.getElementById(a_ID).style.display = 'block';
}

function HideHelperDiv(a_ID)
{
  document.getElementById(a_ID).style.visibility = 'hidden'; 
  document.getElementById(a_ID).style.display = 'none';
}
  
//build the helper div to display on mouse over
function BuildHelperDiv(a_DivID, a_IndicatorDivContent, a_Title, a_Text)
{
  var l_Qutput = '';
  l_Qutput += '<span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'' + a_Title + '\', \'' + a_Text + '\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >' + a_IndicatorDivContent + '</span>';
  return l_Qutput;
}

//build the helper div to display on mouse over
function BuildHelperDivLink(a_DivID, a_IndicatorDivContent, a_Title, a_Text, a_SubTopic)
{
  var l_Qutput = '';
  l_Qutput += '<a href="../common/help.php?subtopic=' + a_SubTopic + '" target="_blank" ><span class="HelperDivIndicator" onMouseOver="ActivateHelperDiv($(this), \'' + a_Title + '\', \'' + a_Text + '\');" onMouseOut="$(\'#HelperDivContainer\').hide();" >' + a_IndicatorDivContent + '</span></a>';
  return l_Qutput;
}

//displays a helper div at the current mause position 
function ActivateHelperDiv(a_Object, a_Title, a_Text)
{
  var l_Left = (a_Object.offset().left + a_Object.width());
  var l_Top = a_Object.offset().top;
  $('#HelperDivContainer').css('top', l_Top); 
  $('#HelperDivContainer').css('left', l_Left); 
  $('#HelperDivHeadline').html(a_Title);
  $('#HelperDivText').html(a_Text);
  $('#HelperDivContainer').show();
}