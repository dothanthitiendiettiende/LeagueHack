<?php

return <<<'VALUE'
"namespace IPS\\Theme;\nclass class_core_front_veilon extends \\IPS\\Theme\\Template\n{\n\t\t\tfunction guestMessage(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['guestMessage'] ):\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Member::loggedIn()->member_id  ):\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n<center>\n\t<div id='guestMessage'>\n\t<h1>\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['guestMessageText'];\n$return .= <<<CONTENT\n<\/h1>\n\t\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['guestMessageContent'];\n$return .= <<<CONTENT\n\n  \t\t<ul class=\"ipsList_inline veizor_top\">\n  \t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_guestmessage_sn'] ):\n$return .= <<<CONTENT\n\n\t    \t<li><a href='\nCONTENT;\n\n$return .= str_replace( '&', '&amp;', \\IPS\\Http\\Url::internal( \"app=core&module=system&controller=login\", null, \"login\", array(), 0 ) );\n$return .= <<<CONTENT\n' class=\"ipsButton veizorButton_primary\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'sign_in_short', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a><\/li>\n\t    \t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t    \t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_guestmessage_su'] ):\n$return .= <<<CONTENT\n\n\t    \t<li><a href='\nCONTENT;\n\n$return .= str_replace( '&', '&amp;', \\IPS\\Http\\Url::internal( \"app=core&module=system&controller=register\", null, \"register\", array(), 0 ) );\n$return .= <<<CONTENT\n' class=\"ipsButton veizorButton_normal\">\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'sign_up', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n<\/a><\/li>\n\t    \t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n  \t\t<\/ul>\n\t<\/div>\n<\/center>\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction linkFonts(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Lato:400,300,700' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=PT+Sans+Caption:400,700' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=PT+Sans:400,700&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Open+Sans:400,700&subset=latin,cyrillic-ext,greek-ext,vietnamese,latin-ext,cyrillic' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Droid+Sans:400,700' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=PT+Serif:400,700&subset=latin,cyrillic,latin-ext,cyrillic-ext' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Droid+Serif:400,700' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Dosis:400,700&subset=latin,latin-ext' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Yanone+Kaffeesatz:400,700&subset=latin,latin-ext' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Play:400,700&subset=latin,cyrillic-ext,greek-ext,latin-ext,greek,cyrillic' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Raleway:400,700' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Abel' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Oxygen:400,700&subset=latin,latin-ext' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Oswald:300,400' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Roboto::400,100,300,500,900,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_choose_google_font'] ):\n$return .= <<<CONTENT\n<link href='https:\/\/fonts.googleapis.com\/css?family=Ubuntu:400,500' rel='stylesheet' type='text\/css'>\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction secondaryFooter(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter'] ):\n$return .= <<<CONTENT\n\n<div id=\"secondaryFooter\">\n   <div class=\"ipsGrid ipsLayout_container\">\n      \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_section1'] and \\IPS\\Theme::i()->settings['customFooter_section1_width'] ):\n$return .= <<<CONTENT\n\n      <div class=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section1_width'];\n$return .= <<<CONTENT\n\">\n         <h2>\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section1_h1'];\n$return .= <<<CONTENT\n<\/h2>\n         <p>\n            \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section1_textarea'];\n$return .= <<<CONTENT\n\n         <\/p>\n      <\/div>\n      \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_section2'] and \\IPS\\Theme::i()->settings['customFooter_section2_width'] ):\n$return .= <<<CONTENT\n\n      <div class=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section2_width'];\n$return .= <<<CONTENT\n\">\n         <h2>\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section2_h1'];\n$return .= <<<CONTENT\n<\/h2>\n         \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section2_textarea'];\n$return .= <<<CONTENT\n\n      <\/div>\n      \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_section3'] and \\IPS\\Theme::i()->settings['customFooter_section3_width'] ):\n$return .= <<<CONTENT\n\n      <div class=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section3_width'];\n$return .= <<<CONTENT\n\">\n         <h2>\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section3_h1'];\n$return .= <<<CONTENT\n<\/h2>\n         \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section3_textarea'];\n$return .= <<<CONTENT\n\n      <\/div>\n      \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_section4'] and \\IPS\\Theme::i()->settings['customFooter_section4_width'] ):\n$return .= <<<CONTENT\n\n      <div class=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section4_width'];\n$return .= <<<CONTENT\n\">\n         <h2>\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section4_h1'];\n$return .= <<<CONTENT\n<\/h2>\n         <p>\n            \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_section4_textarea'];\n$return .= <<<CONTENT\n\n         <\/p>\n         <div class=\"secondaryFooterLinks\">\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_facebook'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_fb'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryFacebookButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_facebook_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_fb_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_googlePlus'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_gp'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryGooglePlusButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_googlePlus_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_gp_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_vk'] and \\IPS\\Theme::i()->settings['theme'].customFooter_socTooltip_vk ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryVkButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_vk_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_vk_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_pinterest'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_pt'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryPinterestButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_pinterest_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_pt_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_vimeo'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_vm'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryVimeoButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_vimeo_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_vm_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_twitter'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_tw'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryTwitterButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_twitter_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_tw_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_youtube'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_yt'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryYoutubeButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_youtube_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_yt_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_linkedln'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_ld'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryLinkenldButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_linkedIn_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_ld_text'];\n$return .= <<<CONTENT\n\"  target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_instagram'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_ig'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryInstagramButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_instagram_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_ig_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_flikr'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_fl'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryFlikrButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_flikr_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_fl_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_steam'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_st'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondarySteamButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_steam_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_st_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['customFooter_rss'] and \\IPS\\Theme::i()->settings['customFooter_socTooltip_rss'] ):\n$return .= <<<CONTENT\n\n            <a class=\"secondaryRssButton secondaryButtonHover\" href=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_rss_link'];\n$return .= <<<CONTENT\n\" data-ipstooltip _title=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['customFooter_socTooltip_rss_text'];\n$return .= <<<CONTENT\n\" target=\"blank\"><\/a>\n            \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n            \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n         <\/div>\n      <\/div>\n      \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n      \nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n   <\/div>\n   <div style=\"padding:10px;margin-bottom:5px;margin-top:40px;border-top: 1px solid #202020;\" class=\"ipsLayout_container\">\n      <div class=\"left\">\n         <p>\n            \u00a9 2015-2016 EloBuddy. All rights reserved.\n         <\/p>\n      <\/div>\n      <div class=\"right\" style=\"margin-top:10px;\">\n         <a href=\"http:\/\/www.invisionpower.com\/apps\/board\/\" title=\"Community Forum Software by Invision Power Services\">Community Forum Software by IP.Board<\/a>\n      <\/div>\n   <\/div>\n<\/div>\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction secondaryJsBody(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_enable'] ):\n$return .= <<<CONTENT\n\r\n<script type=\"text\/javascript\" src=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->resource( \"js\/owl.carousel-min.js\", \"core\", 'global', false );\n$return .= <<<CONTENT\n\"><\/script> \r\n<script>\r\n  $(document).ready(function() {\r\n    $(\"#owl-veizor\").owlCarousel({\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_pagination_enable'] ):\n$return .= <<<CONTENT\n\r\n    pagination : true,\r\n    \nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\r\n    pagination : false,\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n    navigation : false,\r\n    slideSpeed : 300,\r\n    paginationSpeed : 400,\r\n\r\n    items : 1, \r\n    itemsDesktop : false,\r\n    itemsDesktopSmall : false,\r\n    itemsTablet: false,\r\n    itemsMobile : false,\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_stoponhover'] ):\n$return .= <<<CONTENT\n\r\n    stopOnHover : true,\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_pagination_autoplay'] ):\n$return .= <<<CONTENT\n\r\n    \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_pagination_autoplay'];\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n    responsive: true,\r\n\r\n    });\r\n\r\n  });\r\n<\/script>\r\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['secondaryNProgress'] ):\n$return .= <<<CONTENT\n\r\n\t\t\t\t<script src=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->resource( \"js\/nprogress.js\", \"core\", 'global', false );\n$return .= <<<CONTENT\n\"><\/script>\r\n\t\t<script>\r\n\t\t    $('body').show();\r\n\t\t    $('.version').text(NProgress.version);\r\n\t\t    NProgress.start();\r\n\t\t    setTimeout(function() { NProgress.done(); $('.fade').removeClass('out'); }, 1000);\r\n\t\t  <\/script>\r\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\r\n\r\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['secondaryScrollTop'] ):\n$return .= <<<CONTENT\n\r\n\t\t<script type=\"text\/javascript\">\r\n\t\tjQuery(document).ready(function($) { $(window).scroll(function() { if ($(this).scrollTop() > 100) { $('.scrollup').fadeIn(); } else { $('.scrollup').fadeOut(); }}); $('.scrollup').click(function() { $(\"html, body\").animate({ scrollTop: 0 }, 600); return false;}); });\r\n\t\t<\/script>\r\n\t\t<a title=\"Back To Top\" class=\"scrollup\"><i class=\"fa \nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_scrolltop_icon'];\n$return .= <<<CONTENT\n fa-2x\"><\/i><\/a>\r\n\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\r\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction secondaryJsHead(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction secondaryNavbarItems( $roots, $subBars=NULL, $parent=0, $preview=FALSE ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nforeach ( $roots as $id => $item ):\n$return .= <<<CONTENT\n\n\t\nCONTENT;\n\nif ( $preview or $item->canView() ):\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nif ( $item->active() ):\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\n\\IPS\\core\\FrontNavigation::i()->activePrimaryNavBar = $item->id;\n$return .= <<<CONTENT\n\n\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<li aria-haspopup=\"true\" \nCONTENT;\n\nif ( $item->active() ):\n$return .= <<<CONTENT\nclass='ipsNavBar_active' data-active\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n id='elNavSecondary_\nCONTENT;\n$return .= htmlspecialchars( $item->id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' data-role=\"navBarItem\" data-navApp=\"\nCONTENT;\n\n$return .= htmlspecialchars( mb_substr( get_class( $item ), 4, mb_strpos( get_class( $item ), '\\\\', 4 ) - 4 ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" data-navExt=\"\nCONTENT;\n\n$return .= htmlspecialchars( mb_substr( get_class( $item ), mb_strrpos( get_class( $item ), '\\\\' ) + 1 ), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\">\n\t\t\t\nCONTENT;\n\n$children = $item->children();\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nif ( $children ):\n$return .= <<<CONTENT\n\n\t\t\t\t\t<a href=\"\nCONTENT;\n\nif ( $item->link() ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $item->link(), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n#\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" id=\"elNavigation_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" data-ipsMenu data-ipsMenu-appendTo='#\nCONTENT;\n\nif ( $parent ):\n$return .= <<<CONTENT\nelNavSecondary_\nCONTENT;\n$return .= htmlspecialchars( $parent, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\nelNavSecondary_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n' data-navItem-id=\"\nCONTENT;\n$return .= htmlspecialchars( $item->id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nif ( $item->active() ):\n$return .= <<<CONTENT\ndata-navDefault\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t\t\t\t\t\t\nCONTENT;\n$return .= htmlspecialchars( $item->title(), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\n\t\t\t\t\t<\/a>\n\t\t\t\t\t<div class=\"grid-container3\">\t\n\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->getTemplate( \"global\", \"core\", 'front' )->navBarChildren( $children, $preview );\n$return .= <<<CONTENT\n\n\t\t\t\t\t\t<\/ul>\n\t\t\t\t\t<\/div>\n\t\t\t\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n\n\t\t\t\t<a href=\"\nCONTENT;\n\nif ( $item->link() ):\n$return .= <<<CONTENT\n\nCONTENT;\n$return .= htmlspecialchars( $item->link(), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\nCONTENT;\n\nelse:\n$return .= <<<CONTENT\n#\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\" data-navItem-id=\"\nCONTENT;\n$return .= htmlspecialchars( $item->id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\" \nCONTENT;\n\nif ( $item->active() ):\n$return .= <<<CONTENT\ndata-navDefault\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n>\n\t\t\t\t\t\nCONTENT;\n$return .= htmlspecialchars( $item->title(), ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n\n\t\t\t\t<\/a>\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t\t\nCONTENT;\n\nif ( $subBars && isset( $subBars[ $id ] ) && count( $subBars[ $id ] ) ):\n$return .= <<<CONTENT\n\n\t\t\t<div class=\"grid-container3\">\n\t\t\t\t<ul>\n\t\t\t\t\t\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->getTemplate( \"veilon\", \"core\", 'front' )->secondaryNavbarItems( $subBars[ $id ], NULL, $item->id, $preview );\n$return .= <<<CONTENT\n\n\t\t\t\t\t<li aria-haspopup=\"true\" class='ipsHide' id='elNavigationMore' data-role='navMore'>\n\t\t\t\t\t\t<ul>\n\t\t\t\t\t\t\t<li>\n\t\t\t\t\t\t\t\t<a href='#' data-ipsMenu data-ipsMenu-appendTo='#elNavigationMore_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n' id='elNavigationMore_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_dropdown'>\nCONTENT;\n\n$return .= \\IPS\\Member::loggedIn()->language()->addToStack( htmlspecialchars( 'more', \\IPS\\HTMLENTITIES, 'UTF-8', FALSE ), TRUE, array(  ) );\n$return .= <<<CONTENT\n <i class='fa fa-caret-down'><\/i><\/a>\n\t\t\t\t\t\t\t<\/li>\n\t\t\t\t\t\t<\/ul>\n\t\t\t\t\t\t<ul class='ipsHide ipsMenu ipsMenu_auto' id='elNavigationMore_\nCONTENT;\n$return .= htmlspecialchars( $id, ENT_QUOTES | \\IPS\\HTMLENTITIES, 'UTF-8', FALSE );\n$return .= <<<CONTENT\n_dropdown_menu' data-role='moreDropdown'><\/ul>\n\t\t\t\t\t<\/li>\n\t\t\t\t<\/ul>\n\t\t\t<\/div>\t\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\t\t<\/li>\n\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\n\nCONTENT;\n\nendforeach;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}\n\n\tfunction secondarySlider(  ) {\n\t\t$return = '';\n\t\t$return .= <<<CONTENT\n\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_enable'] ):\n$return .= <<<CONTENT\n\r\n<div class=\"veilon_slider\">\r\n\t<div id=\"owl-veizor\" class=\"owl-carousel owl-theme\">\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section1'] ):\n$return .= <<<CONTENT\n\r\n\t\t<div class=\"item\">\r\n\t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section1_upload'] ):\n$return .= <<<CONTENT\n\r\n\t\t\t<a href='\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section1_link'];\n$return .= <<<CONTENT\n'><img src=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section1_upload'];\n$return .= <<<CONTENT\n\"><\/a>\r\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t<\/div>\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section2'] ):\n$return .= <<<CONTENT\n\r\n\t\t<div class=\"item\">\r\n\t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section2_upload'] ):\n$return .= <<<CONTENT\n\r\n\t\t\t<a href='\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section2_link'];\n$return .= <<<CONTENT\n'><img src=\"\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section2_upload'];\n$return .= <<<CONTENT\n\"><\/a>\r\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t<\/div>\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section3'] ):\n$return .= <<<CONTENT\n\r\n\t\t<div class=\"item\">\r\n\t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section3_upload'] ):\n$return .= <<<CONTENT\n\r\n\t\t\t<a href='\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section3_link'];\n$return .= <<<CONTENT\n'><img src=\"\nCONTENT;\n\n\n$return .= <<<CONTENT\n\"><\/a>\r\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t<\/div>\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section4'] ):\n$return .= <<<CONTENT\n\r\n\t\t<div class=\"item\">\r\n\t\t\t\nCONTENT;\n\nif ( \\IPS\\Theme::i()->settings['veilon_slider_section4_upload'] ):\n$return .= <<<CONTENT\n\r\n\t\t\t<a href='\nCONTENT;\n\n$return .= \\IPS\\Theme::i()->settings['veilon_slider_section4_link'];\n$return .= <<<CONTENT\n'><img src=\"\nCONTENT;\n\n\n$return .= <<<CONTENT\n\"><\/a>\r\n\t\t\t\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n\t\t<\/div>\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\r\n<\/div>\r\n\nCONTENT;\n\nendif;\n$return .= <<<CONTENT\n\nCONTENT;\n\n\t\treturn $return;\n}}"
VALUE;