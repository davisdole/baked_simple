<?php
	$js = <<<JS
    tinyMCE.init({
        mode: "specific_textareas",
        theme: "advanced",

        // @TODO cleanup unneeded plugins
        plugins: "style,paste,directionality,visualchars,nonbreaking,xhtmlxtras,inlinepopups,simplebrowser",
        doctype: '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">',

        // Theme options
        //theme_advanced_buttons1: "undo,redo,|,bold,italic,strikethrough,|,formatselect,|,bullist,numlist,|,outdent,indent,blockquote,|,link,unlink,ibrowser,|,charmap,code",
		//theme_advanced_buttons2: "",
		//theme_advanced_buttons3: "",
        theme_advanced_toolbar_location: "top",
        theme_advanced_toolbar_align: "left",
        theme_advanced_statusbar_location: "bottom",
        theme_advanced_resizing: true,
        theme_advanced_resize_horizontal: false,
		theme_advanced_path: false,
        width: '100%',

        // File manager
		plugin_simplebrowser_width : '800', //default
		plugin_simplebrowser_height : '600', //default
        plugin_simplebrowser_browselinkurl : '/baked_simple/js/tiny_mce/plugins/simplebrowser/browser.html?Connector=connectors/php/connector.php',
        plugin_simplebrowser_browseimageurl : '/baked_simple/js/tiny_mce/plugins/simplebrowser/browser.html?Type=Image&Connector=connectors/php/connector.php',
        plugin_simplebrowser_browseflashurl : '/baked_simple/js/tiny_mce/plugins/simplebrowser/browser.html?Type=Flash&Connector=connectors/php/connector.php',

        // Which textareas?
        editor_selector: "tinymce",

        // URLs
        relative_urls: false,
        remove_script_host: true,
        document_base_url: 'http://{$_SERVER['SERVER_NAME']}{$this->base}/',

        // CSS
        content_css: '{$html->url('/css/content.css')}'
    });
JS;

	$javascript->codeBlock($js, array('inline' => false));
?>