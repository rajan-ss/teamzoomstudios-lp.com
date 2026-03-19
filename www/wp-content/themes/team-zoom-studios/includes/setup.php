<?php

function tzs_setup_theme()
{
  add_theme_support('editor-styles');

  add_editor_style([
    'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Mulish:wght@300;400;500;600;700;800;900&display=swap',
    'lib/icons/style.css',
    'assets/css/style.css',
    'assets/css/editor.css'
  ]);
}
