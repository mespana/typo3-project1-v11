<?php
return array (
  't3p1' => 
  array (
    'base' => 'https://typo3-project1-v11.ddev.site/',
    'errorHandling' => 
    array (
      0 => 
      array (
        'errorCode' => 404,
        'errorHandler' => 'Page',
        'errorContentSource' => 't3://page?uid=46',
      ),
      1 => 
      array (
        'errorCode' => 500,
        'errorHandler' => 'Page',
        'errorContentSource' => 't3://page?uid=46',
      ),
    ),
    'languages' => 
    array (
      0 => 
      array (
        'title' => 'Deutsch',
        'enabled' => true,
        'languageId' => 0,
        'base' => '/',
        'typo3Language' => 'de',
        'locale' => 'de_DE.UTF-8',
        'iso-639-1' => 'de',
        'navigationTitle' => 'Deutsch',
        'hreflang' => 'de',
        'direction' => 'ltr',
        'flag' => 'de',
        'websiteTitle' => '',
      ),
    ),
    'rootPageId' => 1,
    'routes' => 
    array (
      0 => 
      array (
        'route' => 'robots.txt',
        'type' => 'staticText',
        'content' => 'User-agent: *
Disallow: /typo3/
Disallow: /typo3_src/
Allow: /typo3/sysext/frontend/Resources/Public/*
',
      ),
    ),
    'websiteTitle' => 'Wittemaier Bau GmbH',
    'routeEnhancers' => 
    array (
      'JobsDetail' => 
      array (
        'type' => 'Extbase',
        'limitToPages' => 26,
        'extension' => 'BwJobs',
        'plugin' => 'Detail',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/',
            '_controller' => 'Frontend::show',
          ),
          1 => 
          array (
            'routePath' => '/{job_position_title}',
            '_controller' => 'Frontend::show',
            '_arguments' => 
            array (
              'job_position_title' => 'jobPosition',
            ),
          ),
          2 => 
          array (
            'routePath' => '/{job_position_title}/apply',
            '_controller' => 'Frontend::apply',
            '_arguments' => 
            array (
              'job_position_title' => 'jobPosition',
            ),
          ),
        ),
        'aspects' => 
        array (
          'job_position_title' => 
          array (
            'type' => 'PersistedAliasMapper',
            'tableName' => 'tx_bwjobs_domain_model_jobposition',
            'routeFieldName' => 'slug',
          ),
        ),
      ),
      'JobsApi' => 
      array (
        'type' => 'Extbase',
        'extension' => 'BwJobs',
        'plugin' => 'Api',
        'routes' => 
        array (
          0 => 
          array (
            'routePath' => '/api/jobPositions',
            '_controller' => 'Api::listJobPositions',
          ),
        ),
      ),
    ),
  ),
);
#