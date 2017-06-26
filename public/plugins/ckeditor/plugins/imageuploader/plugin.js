// Copyright (c) 2015, Fujana Solutions - Moritz Maleck. All rights reserved.
// For licensing, see LICENSE.md

CKEDITOR.plugins.add( 'imageuploader', {
    init: function( editor ) {
        editor.config.filebrowserBrowseUrl = 'http://192.168.90.195/institucional/public/plugins/ckeditor/plugins/imageuploader/imgbrowser.php';
    }
});
