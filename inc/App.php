<?php 

class App {
  // public $blogGeneralData = [];

  // public $blogGeneralData = [
  //     'siteName' => $this->siteName(),
  // ];
  
  /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }
}

$blogGeneralData = [
  'siteName' => get_bloginfo('name'),
  'mainSiteUrl' => get_bloginfo('url')
];

$GLOBALS['blogGeneralData'] = $blogGeneralData;