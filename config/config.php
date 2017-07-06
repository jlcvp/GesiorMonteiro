<?PHP
# Account Maker Config
$config['site']['serverPath'] = "";
$config['site']['useServerConfigCache'] = false;
$towns_list = array(
1 => 'Venore',
2 => 'Thais',
3 => 'Kazordoon', 
4 => 'Carlin', 
5 => 'Ab Dendriel', 
6 => 'Rookgaard', 
7 => 'Liberty Bay', 
8 => 'Port Hope', 
9 => 'Ankrahmun', 
10 => 'Darashia', 
11 => 'Edron', 
12 => 'Svargrond', 
13 => 'Yalahar', 
14 => 'Farmine', 
15 => 'Gray Beach', 
16 => 'Roshamuul', 
30 => 'Rathleton');

# Create Account Options
$config['site']['one_email'] = true;
$config['site']['create_account_verify_mail'] = true;
$config['site']['email_days_to_change'] = 5;
$config['site']['newaccount_premdays'] = 3065;
$config['site']['send_register_email'] = false;
$config['site']['verify_code'] = true;

# Create Character Options
$config['site']['newchar_vocations'] = array(0 => 'Rook Sample');
$config['site']['newchar_towns'] = array(6);
$config['site']['max_players_per_account'] = 7;


# Emails Config
$config['site']['lost_acc'] = true;
$config['site']['send_emails'] = true;
$config['site']['mail_address'] = "";
$config['site']['mail_senderName'] = "";
$config['site']['smtp_enabled'] = true;
$config['site']['smtp_host'] = "";
$config['site']['smtp_port'] = 465; 
$config['site']['smtp_auth'] = true;
$config['site']['smtp_user'] = "";
$config['site']['smtp_pass'] = "";
$config['site']['smtp_secure'] = true;

# PAGE: characters.php
$config['site']['quests'] = array(
"Demon Helmet" => 0,
"Ferumbra's Ascandant" => 0,
"In Service of Yalahar" => 0,
"Pits Of Inferno" => 0,
"The Ancient Tombs" => 0,
"The Annihilator" => 0,
"The Demon Oak" => 0,
"Wrath Of The Emperor" => 0);


# PAGE: accountmanagement.php
$config['site']['send_mail_when_change_password'] = true;
$config['site']['send_mail_when_generate_reckey'] = true;
$config['site']['generate_new_reckey'] = false;
$config['site']['generate_new_reckey_price'] = 500;

# PAGE: guilds.php
$config['site']['guild_need_level'] = 15;
$config['site']['guild_need_pacc'] = true;
$config['site']['guild_image_size_kb'] = 50;
$config['site']['guild_description_chars_limit'] = 2000;
$config['site']['guild_description_lines_limit'] = 6;
$config['site']['guild_motd_chars_limit'] = 250;

# PAGE: adminpanel.php
$config['site']['access_admin_panel'] = 5;

# PAGE: latestnews.php
$config['site']['news_limit'] = 6;

# PAGE: killstatistics.php
$config['site']['last_deaths_limit'] = 40;

# PAGE: team.php
$config['site']['groups_support'] = array(2, 3, 4, 5);

# PAGE: highscores.php
$config['site']['groups_hidden'] = array(2, 3, 4, 5);
$config['site']['accounts_hidden'] = array(1);

# PAGE: lostaccount.php
$config['site']['email_lai_sec_interval'] = 180;

# PAGE: buypoints.php
$config['site']['shop_system'] = true;

# Layout Config
$config['site']['layout'] = 'tibiacom';
$config['site']['vdarkborder'] = '#505050';
$config['site']['darkborder'] = '#D4C0A1';
$config['site']['lightborder'] = '#F1E0C6';
$config['site']['download_page'] = true;
$config['site']['serverinfo_page'] = true;

# PagSeguro/Paypal Email
$config['pagseguro']['email'] = ''; 
$config['paypal']['email'] = '';

# Tokens pagseguro
$config['pagseguro']['apitoken'] = '67384F233619413C8DB0C9CF445E84E8'; //production
//$config['pagseguro']['apitoken'] = "C945FF3DF70F4745BD87C0247BC64877"; //sandbox
$config['pagseguro']['apptoken'] = "E7FA50505959327FF4607F98679851CD";

# ConfigProducts
$config['pagseguro']['produtoNome'] = 'Tibia Coins';
$config['pagseguro']['produtoValor'] = '1';

# Configs Paypal and PagSeguro
$config['site']['pagseguro'] = 1;
$config['site']['paypal'] = 0;

# Prices
$config['pagseguro']['offers'] = array(
    500=>75,
    800=>125,
    1500=>250,
    2800=>500,
    4900=>1000
);

###############################################
# Pagseguro Basic Authentication credentials  #
###############################################
$config['pagseguro']['post_user']= "";
$config['pagseguro']['post_pass'] = "";
$config['pagseguro']['urlRedirect'] =  'https://127.0.0.1/?subtopic=buypoints&action=realizado';
$config['pagseguro']['urlNotification'] = 'http://127.0.0.1.com/retpagseguro.php';