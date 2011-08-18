/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/
CKEDITOR.plugins.addExternal('fmath_formula', 'plugins/fmath_formula/', 'plugin.js');
CKEDITOR.editorConfig = function( config )
{
	
			config.filebrowserBrowseUrl = '/MathTest/kcfinder/browse.php?type=files';
			config.filebrowserImageBrowseUrl = '/MathTest/kcfinder/browse.php?type=images';
			config.filebrowserFlashBrowseUrl = '/MathTest/kcfinder/browse.php?type=flash';
			config.filebrowserUploadUrl = '/MathTest/kcfinder/upload.php?type=files';
			config.filebrowserImageUploadUrl = '/MathTest/kcfinder/upload.php?type=images';
			config.filebrowserFlashUploadUrl = '/MathTest/kcfinder/upload.php?type=flash';
// Declare the additional plugin 

			config.extraPlugins = 'fmath_formula';
	
		       // Add the button to toolbar
			config.toolbar = [ 
			['Templates', 'Styles','Format','Font','FontSize','TextColor','BGColor','Maximize','Image'], 
			['Source'], 
			['Bold','Italic','Underline','Strike','-','Subscript','Superscript','-','fmath_formula'], 
			['Table','HorizontalRule'], 
			['NumberedList','BulletedList','-','Outdent','Indent','Blockquote']]
};
