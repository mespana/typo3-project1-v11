<?php
return array (
  'tca' => 
  array (
    'be_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'adminOnly' => true,
        'groupName' => 'backendaccess',
        'rootLevel' => 1,
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-backend',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups',
        'useColumnsForDefaultValues' => 'file_permissions',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:db_mountpoints',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'pagetypes_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.pagetypes_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailablePageTypes',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_modify' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_modify',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'tables_select' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tables_select',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableTables',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'non_exclude_fields' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.non_exclude_fields',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExcludeFields',
            'size' => 25,
            'autoSizeMax' => 50,
          ),
        ),
        'explicit_allowdeny' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.explicit_allowdeny',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateExplicitAuthValues',
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'custom_options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.custom_options',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateCustomPermissionOptions',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'groupMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableGroupModules',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'mfa_providers' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:mfa_providers',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Authentication\\Mfa\\MfaProviderRegistry->allowedProvidersItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'subgroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'foreign_table_where' => 'AND NOT({#be_groups}.{#uid} = ###THIS_UID###)',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'availableWidgets' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:availableWidgets',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Dashboard\\WidgetRegistry->widgetItemsProcFunc',
            'size' => 5,
            'autoSizeMax' => 50,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.base_rights,
                groupMods, availableWidgets, mfa_providers, tables_select, tables_modify, pagetypes_select, non_exclude_fields, explicit_allowdeny, allowed_languages, custom_options,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
    ),
    'be_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'default_sortby' => 'admin, username',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'type' => 'admin',
        'typeicon_column' => 'admin',
        'typeicon_classes' => 
        array (
          0 => 'status-user-backend',
          1 => 'status-user-admin',
          'default' => 'status-user-backend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,options,db_mountpoints,file_mountpoints,file_permissions,userMods',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'username,email,realName',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'nospace,trim,lower,unique,required',
            'autocomplete' => false,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'mfa' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.mfa',
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'mfaInfo',
            'eval' => 'password',
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'be_groups',
            'size' => 5,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.usergroup_list_title',
                ),
              ),
            ),
          ),
        ),
        'avatar' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.avatar',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'avatar',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'db_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
          ),
        ),
        'file_mountpoints' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'sys_filemounts',
            'foreign_table_where' => ' AND {#sys_filemounts}.{#pid}=0',
            'size' => 3,
            'maxitems' => 100,
            'autoSizeMax' => 10,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_edit_title',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
              'listModule' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_list_title',
                ),
              ),
            ),
          ),
        ),
        'email' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim,email',
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'realName' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 80,
          ),
        ),
        'disable' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isRecordCurrentUser:false',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'default' => 1,
          ),
        ),
        'admin' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.admin',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'fieldInformation' => 
            array (
              'adminIsSystemMaintainer' => 
              array (
                'renderType' => 'adminIsSystemMaintainer',
              ),
            ),
          ),
        ),
        'options' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_db_mounts',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.options_file_mounts',
              ),
            ),
            'default' => 3,
          ),
        ),
        'file_permissions' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.fileoper_perms',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder',
                1 => '--div--',
                2 => 'apps-filetree-folder-default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_read',
                1 => 'readFolder',
                2 => 'apps-filetree-folder-default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_write',
                1 => 'writeFolder',
                2 => 'apps-filetree-folder-default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_add',
                1 => 'addFolder',
                2 => 'apps-filetree-folder-default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_rename',
                1 => 'renameFolder',
                2 => 'apps-filetree-folder-default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_move',
                1 => 'moveFolder',
                2 => 'apps-filetree-folder-default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_copy',
                1 => 'copyFolder',
                2 => 'apps-filetree-folder-default',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_delete',
                1 => 'deleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.folder_recursivedelete',
                1 => 'recursivedeleteFolder',
                2 => 'apps-filetree-folder-default',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files',
                1 => '--div--',
                2 => 'mimetypes-other-other',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_read',
                1 => 'readFile',
                2 => 'mimetypes-other-other',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_write',
                1 => 'writeFile',
                2 => 'mimetypes-other-other',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_add',
                1 => 'addFile',
                2 => 'mimetypes-other-other',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_rename',
                1 => 'renameFile',
                2 => 'mimetypes-other-other',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_replace',
                1 => 'replaceFile',
                2 => 'mimetypes-other-other',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_move',
                1 => 'moveFile',
                2 => 'mimetypes-other-other',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_copy',
                1 => 'copyFile',
                2 => 'mimetypes-other-other',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_groups.file_permissions.files_delete',
                1 => 'deleteFile',
                2 => 'mimetypes-other-other',
              ),
            ),
            'size' => 17,
            'maxitems' => 17,
            'default' => 'readFolder,writeFolder,addFolder,renameFolder,moveFolder,deleteFolder,readFile,writeFile,addFile,renameFile,replaceFile,moveFile,copyFile,deleteFile',
          ),
        ),
        'workspace_perms' => 
        array (
          'exclude' => 1,
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Hooks\\TcaDisplayConditions->isExtensionInstalled:workspaces',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:workspace_perms_live',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'lang' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.lang',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSystemLanguagesForBackend',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                0 => 'English',
                1 => 'default',
              ),
            ),
            'itemGroups' => 
            array (
              'installed' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.installed',
              'unavailable' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.languageItemGroups.unavailable',
            ),
          ),
        ),
        'userMods' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:userMods',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableUserModules',
            'size' => 5,
            'autoSizeMax' => 50,
            'maxitems' => 100,
          ),
        ),
        'allowed_languages' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:allowed_languages',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Localization\\TcaSystemLanguageCollector->populateAvailableSiteLanguages',
          ),
        ),
        'TSconfig' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 5,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'lastlogin' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'category_perms' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:category_perms',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'treeConfig' => 
            array (
              'appearance' => 
              array (
                'expandAll' => false,
                'showHeader' => false,
              ),
            ),
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                disable, admin, username, password, mfa, avatar, usergroup, realName, email, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.rights,
                userMods, allowed_languages,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.mounts_and_workspaces,
                workspace_perms, db_mountpoints, options, file_mountpoints, file_permissions, category_perms,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                disable, admin, username, password, mfa, avatar, usergroup, realName, email, lang, lastlogin,
            --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:be_users.tabs.options,
                TSconfig, db_mountpoints, options, file_mountpoints,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'pages' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'rowDescription',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages',
        'type' => 'doktype',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'delete' => 'deleted',
        'crdate' => 'crdate',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'useColumnsForDefaultValues' => 'doktype,fe_group,hidden',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'doktype',
        'typeicon_classes' => 
        array (
          1 => 'apps-pagetree-page-default',
          '1-hideinmenu' => 'apps-pagetree-page-hideinmenu',
          '1-root' => 'apps-pagetree-page-domain',
          3 => 'apps-pagetree-page-shortcut-external',
          '3-hideinmenu' => 'apps-pagetree-page-shortcut-external-hideinmenu',
          '3-root' => 'apps-pagetree-page-shortcut-external-root',
          4 => 'apps-pagetree-page-shortcut',
          '4-hideinmenu' => 'apps-pagetree-page-shortcut-hideinmenu',
          '4-root' => 'apps-pagetree-page-shortcut-root',
          6 => 'apps-pagetree-page-backend-users',
          '6-hideinmenu' => 'apps-pagetree-page-backend-users-hideinmenu',
          '6-root' => 'apps-pagetree-page-backend-users-root',
          7 => 'apps-pagetree-page-mountpoint',
          '7-hideinmenu' => 'apps-pagetree-page-mountpoint-hideinmenu',
          '7-root' => 'apps-pagetree-page-mountpoint-root',
          199 => 'apps-pagetree-spacer',
          '199-hideinmenu' => 'apps-pagetree-spacer-hideinmenu',
          '199-root' => 'apps-pagetree-page-domain',
          254 => 'apps-pagetree-folder-default',
          '254-hideinmenu' => 'apps-pagetree-folder-default',
          '254-root' => 'apps-pagetree-page-domain',
          255 => 'apps-pagetree-page-recycler',
          '255-hideinmenu' => 'apps-pagetree-page-recycler',
          'contains-shop' => 'apps-pagetree-folder-contains-shop',
          'contains-approve' => 'apps-pagetree-folder-contains-approve',
          'contains-fe_users' => 'apps-pagetree-folder-contains-fe_users',
          'contains-board' => 'apps-pagetree-folder-contains-board',
          'contains-news' => 'apps-pagetree-folder-contains-news',
          'page-contentFromPid' => 'apps-pagetree-page-content-from-page',
          'page-contentFromPid-root' => 'apps-pagetree-page-content-from-page-root',
          'page-contentFromPid-hideinmenu' => 'apps-pagetree-page-content-from-page-hideinmenu',
          'default' => 'apps-pagetree-page-default',
          'contains-wecookieconsent' => 'pagetree-folder-contains-cookies',
        ),
        'searchFields' => 'title,nav_title,subtitle,url,slug,keywords,description,abstract,author,author_email',
      ),
      'interface' => 
      array (
        'maxDBListItems' => 30,
        'maxSingleDBListItems' => 50,
      ),
      'columns' => 
      array (
        'doktype' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
                1 => '--div--',
                2 => NULL,
                3 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.0',
                1 => '1',
                2 => 'apps-pagetree-page-default',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.4',
                1 => '6',
                2 => 'apps-pagetree-page-backend-users',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
                1 => '--div--',
                2 => NULL,
                3 => 'link',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.2',
                1 => '4',
                2 => 'apps-pagetree-page-shortcut',
                3 => 'link',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.5',
                1 => '7',
                2 => 'apps-pagetree-page-mountpoint',
                3 => 'link',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.8',
                1 => '3',
                2 => 'apps-pagetree-page-shortcut-external',
                3 => 'link',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
                1 => '--div--',
                2 => NULL,
                3 => 'special',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.folder',
                1 => '254',
                2 => 'apps-pagetree-folder-default',
                3 => 'special',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:doktype.I.2',
                1 => '255',
                2 => 'apps-filetree-folder-recycler',
                3 => 'special',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.I.7',
                1 => '199',
                2 => 'apps-pagetree-spacer',
                3 => 'special',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.page',
              'link' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.link',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype.div.special',
            ),
            'default' => '1',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'slug' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.slug',
          'displayCond' => 'USER:TYPO3\\CMS\\Core\\Compatibility\\PseudoSiteTcaDisplayCondition->isInPseudoSite:pages:false',
          'config' => 
          array (
            'type' => 'slug',
            'size' => 50,
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'TSconfig' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
            'enableTabulator' => true,
            'fixedFont' => true,
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'php_tree_stop' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:php_tree_stop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'pages',
            'foreign_table_where' => 'AND {#pages}.{#uid}=###CURRENT_PID### AND {#pages}.{#sys_language_uid} = 0',
            'default' => 0,
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'pages',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 7,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'extendToSubpages' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'nav_hide' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'subtitle' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'target' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 80,
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'eval' => 'trim',
          ),
        ),
        'url' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'trim,required',
            'softref' => 'url',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'lastUpdated' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'newUntil' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'cache_timeout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.1',
                1 => 60,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.2',
                1 => 300,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.3',
                1 => 900,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.4',
                1 => 1800,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.5',
                1 => 3600,
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.6',
                1 => 14400,
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.7',
                1 => 86400,
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.8',
                1 => 172800,
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.9',
                1 => 604800,
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout.I.10',
                1 => 2678400,
              ),
            ),
            'default' => 0,
          ),
        ),
        'cache_tags' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_tags',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'no_search' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.shortcut_page',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'shortcut_mode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.2',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode.I.3',
                1 => 3,
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'content_from_pid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'suggestOptions' => 
            array (
              'default' => 
              array (
                'additionalSearchFields' => 'nav_title, url',
                'addWhere' => ' AND pages.uid != ###THIS_UID###',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'mount_pid' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'keywords' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.keywords',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'abstract' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'author' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.author',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim',
            'max' => 80,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'author_email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 23,
            'eval' => 'trim,email',
            'max' => 255,
            'softref' => 'email[subst]',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'is_siteroot' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'mount_pid_ol' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol',
          'config' => 
          array (
            'type' => 'radio',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol.I.1',
                1 => 1,
              ),
            ),
          ),
        ),
        'module' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module.I.4',
                1 => 'fe_users',
                2 => 'status-user-frontend',
              ),
              2 => 
              array (
                0 => 'Cookies',
                1 => 'wecookieconsent',
                2 => 'pagetree-folder-contains-cookies',
              ),
            ),
            'default' => '',
          ),
        ),
        'fe_login_mode' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enable',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableAll',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.disableGroups',
                1 => 3,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode.enableAgain',
                1 => 2,
              ),
            ),
          ),
        ),
        'l18n_cfg' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg.I.2',
              ),
            ),
          ),
        ),
        'backend_layout' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'fieldInformation' => 
            array (
              'backendLayoutFromParentPage' => 
              array (
                'renderType' => 'backendLayoutFromParentPage',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'backend_layout_next_level' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout.none',
                1 => -1,
              ),
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->addBackendLayoutItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'tsconfig_includes' => 
        array (
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes',
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Bootstrap Package: Backend Layouts (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig',
              ),
              1 => 
              array (
                0 => 'Bootstrap Package: TCEMAIN (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEMAIN.tsconfig',
              ),
              2 => 
              array (
                0 => 'Bootstrap Package: TCEFORM (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/TCEFORM.tsconfig',
              ),
              3 => 
              array (
                0 => 'Bootstrap Package: All Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/All.tsconfig',
              ),
              4 => 
              array (
                0 => 'Bootstrap Package: Categories for Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Categories.tsconfig',
              ),
              5 => 
              array (
                0 => 'Bootstrap Package Content Element: Accordion (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Accordion.tsconfig',
              ),
              6 => 
              array (
                0 => 'Bootstrap Package Content Element: Audio (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Audio.tsconfig',
              ),
              7 => 
              array (
                0 => 'Bootstrap Package Content Element: Bullet List (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Bullets.tsconfig',
              ),
              8 => 
              array (
                0 => 'Bootstrap Package Content Element: Card Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CardGroup.tsconfig',
              ),
              9 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Carousel.tsconfig',
              ),
              10 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel Small (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselSmall.tsconfig',
              ),
              11 => 
              array (
                0 => 'Bootstrap Package Content Element: Carousel Fullscreen (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/CarouselFullscreen.tsconfig',
              ),
              12 => 
              array (
                0 => 'Bootstrap Package Content Element: CSV (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Csv.tsconfig',
              ),
              13 => 
              array (
                0 => 'Bootstrap Package Content Element: External Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ExternalMedia.tsconfig',
              ),
              14 => 
              array (
                0 => 'Bootstrap Package Content Element: Header (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Header.tsconfig',
              ),
              15 => 
              array (
                0 => 'Bootstrap Package Content Element: Icon Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/IconGroup.tsconfig',
              ),
              16 => 
              array (
                0 => 'Bootstrap Package Content Element: Image (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Image.tsconfig',
              ),
              17 => 
              array (
                0 => 'Bootstrap Package Content Element: List Group (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/ListGroup.tsconfig',
              ),
              18 => 
              array (
                0 => 'Bootstrap Package Content Element: Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Media.tsconfig',
              ),
              19 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Cards (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardList.tsconfig',
              ),
              20 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Cards of subpages (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuCardDir.tsconfig',
              ),
              21 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Thumbnails (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailList.tsconfig',
              ),
              22 => 
              array (
                0 => 'Bootstrap Package Content Element: Menu Thumbnails of subpages (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/MenuThumbnailDir.tsconfig',
              ),
              23 => 
              array (
                0 => 'Bootstrap Package Content Element: Panel (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Panel.tsconfig',
              ),
              24 => 
              array (
                0 => 'Bootstrap Package Content Element: Quote (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Quote.tsconfig',
              ),
              25 => 
              array (
                0 => 'Bootstrap Package Content Element: Social Links (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/SocialLinks.tsconfig',
              ),
              26 => 
              array (
                0 => 'Bootstrap Package Content Element: Tab (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Tab.tsconfig',
              ),
              27 => 
              array (
                0 => 'Bootstrap Package Content Element: Table (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Table.tsconfig',
              ),
              28 => 
              array (
                0 => 'Bootstrap Package Content Element: Text (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Text.tsconfig',
              ),
              29 => 
              array (
                0 => 'Bootstrap Package Content Element: Text in Columns (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textcolumn.tsconfig',
              ),
              30 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Icon (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Texticon.tsconfig',
              ),
              31 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Media (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textmedia.tsconfig',
              ),
              32 => 
              array (
                0 => 'Bootstrap Package Content Element: Text and Images (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textpic.tsconfig',
              ),
              33 => 
              array (
                0 => 'Bootstrap Package Content Element: Text with Teaser (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Textteaser.tsconfig',
              ),
              34 => 
              array (
                0 => 'Bootstrap Package Content Element: Timeline (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Timeline.tsconfig',
              ),
              35 => 
              array (
                0 => 'Bootstrap Package Content Element: File Links (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Uploads.tsconfig',
              ),
              36 => 
              array (
                0 => 'Bootstrap Package Content Element: Gallery (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TsConfig/Page/ContentElement/Element/Gallery.tsconfig',
              ),
              37 => 
              array (
                0 => 'Wittemaier Bau Web Relaunch (typo3_project1)',
                1 => 'EXT:typo3_project1/Configuration/TsConfig/Page/All.tsconfig',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'no_index' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'onChange' => 'reload',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'no_follow' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'exclude',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'sitemap_changefreq' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.always',
                1 => 'always',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.hourly',
                1 => 'hourly',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.daily',
                1 => 'daily',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.weekly',
                1 => 'weekly',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.monthly',
                1 => 'monthly',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.yearly',
                1 => 'yearly',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_changefreq.never',
                1 => 'never',
              ),
            ),
          ),
        ),
        'sitemap_priority' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.sitemap_priority',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => '0.5',
            'items' => 
            array (
              0 => 
              array (
                0 => '0.0',
                1 => '0.0',
              ),
              1 => 
              array (
                0 => '0.1',
                1 => '0.1',
              ),
              2 => 
              array (
                0 => '0.2',
                1 => '0.2',
              ),
              3 => 
              array (
                0 => '0.3',
                1 => '0.3',
              ),
              4 => 
              array (
                0 => '0.4',
                1 => '0.4',
              ),
              5 => 
              array (
                0 => '0.5',
                1 => '0.5',
              ),
              6 => 
              array (
                0 => '0.6',
                1 => '0.6',
              ),
              7 => 
              array (
                0 => '0.7',
                1 => '0.7',
              ),
              8 => 
              array (
                0 => '0.8',
                1 => '0.8',
              ),
              9 => 
              array (
                0 => '0.9',
                1 => '0.9',
              ),
              10 => 
              array (
                0 => '1.0',
                1 => '1.0',
              ),
            ),
          ),
        ),
        'canonical_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
          'displayCond' => 'FIELD:no_index:=:0',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.canonical_link',
                  'blindLinkFields' => 'class,target,title',
                  'blindLinkOptions' => 'mail,folder,file,telephone',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.og_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'disabled' => true,
                      ),
                      'social' => 
                      array (
                        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.crop_variant.social',
                        'coverAreas' => 
                        array (
                        ),
                        'cropArea' => 
                        array (
                          'x' => '0.0',
                          'y' => '0.0',
                          'width' => '1.0',
                          'height' => '1.0',
                        ),
                        'allowedAspectRatios' => 
                        array (
                          '1.91:1' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.191_1',
                            'value' => 1.9047619047619047,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => '1.91:1',
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'summary',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary',
                1 => 'summary',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.twitter_card.summary_large_image',
                1 => 'summary_large_image',
              ),
            ),
          ),
        ),
        'nav_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'nav_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'nav_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'nav_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.nav_icon',
          'displayCond' => 'FIELD:nav_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'nav_icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        'thumbnail' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:pages.thumbnail',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'thumbnail',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.seo, --palette--;;seo, --palette--;;robots, --palette--;;canonical, --palette--;;sitemap, --div--;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.tabs.socialmedia, --palette--;;opengraph, --palette--;;twittercards,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        6 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;metatags,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                    --palette--;;replace,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;caching,
                    --palette--;;miscellaneous,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        3 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;external,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        4 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title, nav_icon_set, nav_icon, nav_icon_identifier,
                    --palette--;;shortcut,
                    --palette--;;shortcutpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout, thumbnail,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'thumbnail' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        7 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    doktype,
                    --palette--;;title,
                    --palette--;;mountpoint,
                    --palette--;;mountpage,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                    --palette--;;abstract,
                    --palette--;;editorial,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;links,
                    --palette--;;miscellaneous,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        199 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;visibility,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        254 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                    --palette--;;backend_layout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                    --palette--;;module,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                    --palette--;;media,
                    --palette--;;config,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        255 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;standard,
                    --palette--;;titleonly,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                    --palette--;;hiddenonly,
                    --palette--;;adminsonly,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => 'starttime, endtime, extendToSubpages',
        ),
        2 => 
        array (
          'showitem' => 'layout, lastUpdated, newUntil, no_search',
        ),
        3 => 
        array (
          'showitem' => 'target, cache_timeout, cache_tags',
        ),
        5 => 
        array (
          'showitem' => 'author, author_email',
        ),
        6 => 
        array (
          'showitem' => 'php_tree_stop, editlock',
        ),
        7 => 
        array (
          'showitem' => 'is_siteroot',
        ),
        8 => 
        array (
          'showitem' => 'backend_layout_next_level',
        ),
        'standard' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.standard',
          'showitem' => 'doktype;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.doktype_formlabel',
        ),
        'shortcut' => 
        array (
          'showitem' => 'shortcut_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_mode_formlabel',
        ),
        'shortcutpage' => 
        array (
          'showitem' => 'shortcut;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.shortcut_formlabel',
        ),
        'mountpoint' => 
        array (
          'showitem' => 'mount_pid_ol;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_ol_formlabel',
        ),
        'mountpage' => 
        array (
          'showitem' => 'mount_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.mount_pid_formlabel',
        ),
        'external' => 
        array (
          'showitem' => 'url;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.url_formlabel, target',
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug, --linebreak--, nav_title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.nav_title_formlabel, --linebreak--, subtitle;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.subtitle_formlabel',
        ),
        'titleonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.title',
          'showitem' => 'title;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.title_formlabel, --linebreak--, slug',
        ),
        'visibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.hidden_toggle_formlabel, nav_hide;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:pages.nav_hide_toggle_formlabel',
        ),
        'hiddenonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.visibility',
          'showitem' => 'hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.hidden_formlabel',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.access',
          'showitem' => 'starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.starttime_formlabel, endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.endtime_formlabel, extendToSubpages;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.extendToSubpages_formlabel, --linebreak--, fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_group_formlabel, --linebreak--, fe_login_mode;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.fe_login_mode_formlabel, --linebreak--,editlock',
        ),
        'abstract' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.abstract',
          'showitem' => 'abstract;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.abstract_formlabel',
        ),
        'metatags' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.metatags',
          'showitem' => 'keywords;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.keywords_formlabel',
        ),
        'editorial' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial',
          'showitem' => 'author;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_formlabel, author_email;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.author_email_formlabel, lastUpdated;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.lastUpdated_formlabel',
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'layout, newUntil;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.newUntil_formlabel, --linebreak--, backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'backend_layout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout',
          'showitem' => 'backend_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_formlabel, backend_layout_next_level;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.backend_layout_next_level_formlabel',
        ),
        'module' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.module',
          'showitem' => 'module;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.module_formlabel',
        ),
        'replace' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.replace',
          'showitem' => 'content_from_pid;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.content_from_pid_formlabel',
        ),
        'links' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.links',
          'showitem' => 'target;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.target_formlabel',
        ),
        'caching' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.caching',
          'showitem' => 'cache_timeout;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.cache_timeout_formlabel, cache_tags',
        ),
        'language' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.language',
          'showitem' => 'l18n_cfg;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.l18n_cfg_formlabel',
        ),
        'miscellaneous' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'is_siteroot;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.is_siteroot_formlabel, no_search;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.no_search_formlabel, php_tree_stop;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.php_tree_stop_formlabel',
        ),
        'adminsonly' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.miscellaneous',
          'showitem' => 'editlock;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.editlock_formlabel',
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.media',
          'showitem' => 'media;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.media_formlabel',
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.config',
          'showitem' => 'tsconfig_includes;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tsconfig_includes, --linebreak--, TSconfig;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.TSconfig_formlabel',
        ),
        'seo' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.seo',
          'showitem' => 'seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title, --linebreak--, description;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel',
        ),
        'robots' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.robots',
          'showitem' => 'no_index;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_index_formlabel, no_follow;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.no_follow_formlabel',
        ),
        'canonical' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.canonical',
          'showitem' => 'canonical_link',
        ),
        'sitemap' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.sitemap',
          'showitem' => 'sitemap_changefreq, sitemap_priority',
        ),
        'opengraph' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.opengraph',
          'showitem' => 'og_title, --linebreak--, og_description, --linebreak--, og_image',
        ),
        'twittercards' => 
        array (
          'label' => 'LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.palettes.twittercards',
          'showitem' => 'twitter_title, --linebreak--, twitter_description, --linebreak--, twitter_image, --linebreak--, twitter_card',
        ),
      ),
    ),
    'sys_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category',
        'descriptionColumn' => 'description',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'versioningWS' => true,
        'rootLevel' => -1,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'searchFields' => 'title,description',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_category',
        ),
        'security' => 
        array (
          'ignoreRootLevelRestriction' => true,
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title, parent,
                --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.items,
                    items,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_category',
            'foreign_table_where' => 'AND {#sys_category}.{#pid}=###CURRENT_PID### AND {#sys_category}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.title',
          'config' => 
          array (
            'type' => 'input',
            'width' => 200,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.description',
          'config' => 
          array (
            'type' => 'text',
            'default' => '',
          ),
        ),
        'parent' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.parent',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'items' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.items',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => '*',
            'MM' => 'sys_category_record_mm',
            'MM_oppositeUsage' => 
            array (
              'tx_wecookieconsent_domain_model_service' => 
              array (
                0 => 'categories',
              ),
              'pages' => 
              array (
                0 => 'categories',
              ),
              'sys_file_metadata' => 
              array (
                0 => 'categories',
              ),
              'tt_content' => 
              array (
                0 => 'categories',
              ),
            ),
            'size' => 10,
            'fieldWizard' => 
            array (
              'recordsOverview' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'sys_file' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'type' => 'type',
        'hideTable' => true,
        'rootLevel' => 1,
        'default_sortby' => 'name ASC',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          1 => 'mimetypes-text-text',
          2 => 'mimetypes-media-image',
          3 => 'mimetypes-media-audio',
          4 => 'mimetypes-media-video',
          5 => 'mimetypes-application',
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'name, type, mime_type',
      ),
      'columns' => 
      array (
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.storage',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.identifier',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.name',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.unknown',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.text',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.image',
                1 => 2,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.audio',
                1 => 3,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.video',
                1 => 4,
              ),
              5 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.type.software',
                1 => 5,
              ),
            ),
          ),
        ),
        'mime_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.mime_type',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sha1' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.sha1',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'size' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.size',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'input',
            'size' => 8,
            'max' => 30,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'missing' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.missing',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.metadata',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'inline',
            'foreign_table' => 'sys_file_metadata',
            'foreign_field' => 'file',
            'size' => 1,
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'fileinfo, storage, missing',
        ),
      ),
      'palettes' => 
      array (
      ),
    ),
    'sys_file_collection' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'default_sortby' => 'crdate',
        'delete' => 'deleted',
        'type' => 'type',
        'typeicon_column' => 'type',
        'typeicon_classes' => 
        array (
          'default' => 'apps-filetree-folder-media',
          'static' => 'apps-clipboard-images',
          'folder' => 'apps-filetree-folder-media',
        ),
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'files,title',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_collection',
            'foreign_table_where' => 'AND {#sys_file_collection}.{#pid}=###CURRENT_PID### AND {#sys_file_collection}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.0',
                1 => 'static',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.1',
                1 => 'folder',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.type.2',
                1 => 'category',
              ),
            ),
          ),
        ),
        'files' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.files',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'files',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required',
          ),
        ),
        'storage' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.storage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'sys_file_storage',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'folder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.folder',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
            'default' => '',
          ),
        ),
        'recursive' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.recursive',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_collection.category',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToOne',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'static' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,files,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'folder' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,storage, folder, recursive,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'category' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    type,title,category,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
        ),
      ),
    ),
    'sys_file_metadata' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_metadata',
        'label' => 'file',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'file:type',
        'hideTable' => true,
        'rootLevel' => 1,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'crdate' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'sys_file_metadata',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_metadata',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'fileinfo' => 
        array (
          'config' => 
          array (
            'type' => 'none',
            'renderType' => 'fileInfo',
          ),
        ),
        'file' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:=:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file',
          'config' => 
          array (
            'readOnly' => true,
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file',
            'foreign_table_where' => 'AND {#sys_file}.{#uid} = ###REC_FIELD_file###',
            'minitems' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.title',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'placeholder' => '__row|file|name',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'alternative' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'l10n_mode' => 'prefixLangTitle',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'width' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.width',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        'height' => 
        array (
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file.height',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'max' => 20,
            'eval' => 'int',
            'default' => 0,
            'readOnly' => true,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                fileinfo, alternative, description, title, --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'language' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_reference' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference',
        'label' => 'uid_local',
        'formattedLabel_userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileInlineLabelService->getInlineLabel',
        'formattedLabel_userFunc_options' => 
        array (
          'sys_file' => 
          array (
            0 => 'title',
            1 => 'name',
          ),
        ),
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'type' => 'uid_local:type',
        'hideTable' => true,
        'delete' => 'deleted',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'rootLevel' => -1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-other-other',
        ),
        'security' => 
        array (
          'ignoreWebMountRestriction' => true,
          'ignoreRootLevelRestriction' => true,
        ),
        'searchFields' => 'title,description,alternative',
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_file_reference',
            'size' => 1,
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'default' => 0,
          ),
        ),
        'uid_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_local',
          'config' => 
          array (
            'type' => 'group',
            'size' => 1,
            'maxitems' => 1,
            'allowed' => 'sys_file',
            'hideSuggest' => true,
          ),
        ),
        'uid_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.uid_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 10,
            'eval' => 'int',
          ),
        ),
        'tablenames' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.tablenames',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'fieldname' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.fieldname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'sorting_foreign' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.sorting_foreign',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'max' => 4,
            'eval' => 'int',
            'default' => 0,
          ),
        ),
        'table_local' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.table_local',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'default' => 'sys_file',
          ),
        ),
        'title' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|title',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 20,
            'max' => 1024,
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'description' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 5,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|description',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'alternative' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.alternative',
          'description' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file.alternative.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'null',
            'placeholder' => '__row|uid_local|metadata|alternative',
            'mode' => 'useOrOverridePlaceholder',
            'default' => NULL,
          ),
        ),
        'crop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.crop',
          'config' => 
          array (
            'type' => 'imageManipulation',
          ),
        ),
        'autoplay' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.autoplay',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        1 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        2 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        3 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        4 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
        5 => 
        array (
          'showitem' => '
				--palette--;;basicoverlayPalette,
				--palette--;;filePalette',
        ),
      ),
      'palettes' => 
      array (
        'basicoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.basicoverlayPalette',
          'showitem' => 'title,description',
        ),
        'imageoverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette',
          'showitem' => '
				alternative,description,--linebreak--,
				link,title,--linebreak--,crop
				',
        ),
        'videoOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'audioOverlayPalette' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette',
          'showitem' => '
				title,description,--linebreak--,autoplay
				',
        ),
        'filePalette' => 
        array (
          'showitem' => 'uid_local, hidden, sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
    ),
    'sys_file_storage' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'name',
        'delete' => 'deleted',
        'descriptionColumn' => 'description',
        'rootLevel' => 1,
        'groupName' => 'system',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'enablecolumns' => 
        array (
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_file_storage',
        ),
        'searchFields' => 'name,description',
      ),
      'columns' => 
      array (
        'name' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'is_browsable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_browsable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_default' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_default',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'eval' => 'maximumRecordsChecked',
            'validation' => 
            array (
              'maximumRecordsChecked' => 1,
            ),
          ),
        ),
        'is_public' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_public',
          'config' => 
          array (
            'default' => 1,
            'type' => 'user',
            'renderType' => 'userSysFileStorageIsPublic',
          ),
        ),
        'is_writable' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_writable',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'is_online' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.is_online',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'auto_extract_metadata' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.auto_extract_metadata',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'processingfolder' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder',
          'config' => 
          array (
            'type' => 'input',
            'placeholder' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.processingfolder.placeholder',
            'size' => 20,
          ),
        ),
        'driver' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.driver',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              'Local' => 
              array (
                0 => 'Local filesystem',
                1 => 'Local',
              ),
            ),
            'default' => 'Local',
            'onChange' => 'reload',
          ),
        ),
        'configuration' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_file_storage.configuration',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'driver',
            'ds' => 
            array (
              'Local' => 'FILE:EXT:core/Configuration/Resource/Driver/LocalDriverFlexForm.xml',
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    name, driver, configuration, is_default, auto_extract_metadata, processingfolder,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:accesscapabilities,
                    --palette--;Capabilities;capabilities,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    is_online,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'capabilities' => 
        array (
          'showitem' => 'is_browsable, is_public, is_writable',
        ),
      ),
    ),
    'sys_filemounts' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_filemounts',
        ),
        'useColumnsForDefaultValues' => 'path,base',
        'versioningWS_alwaysAllowLiveEdit' => true,
        'searchFields' => 'title,path',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'eval' => 'required,trim',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
            'max' => 2000,
          ),
        ),
        'base' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.baseStorage',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'sys_file_storage',
            'allowNonIdValues' => true,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'maxitems' => 1,
            'eval' => 'required',
            'range' => 
            array (
              'lower' => 1,
            ),
          ),
        ),
        'path' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.folder',
          'displayCond' => 'FIELD:base:>:0',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Resource\\Service\\UserFileMountService->renderTceformsSelectDropdown',
          ),
        ),
        'read_only' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_filemounts.read_only',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,base, path,read_only,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_language' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'default_sortby' => 'title',
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language',
        'adminOnly' => true,
        'groupName' => 'system',
        'rootLevel' => 1,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_column' => 'flag',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_language',
          'mask' => 'flags-###TYPE###',
        ),
        'versioningWS_alwaysAllowLiveEdit' => true,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'input',
            'size' => 35,
            'max' => 80,
            'eval' => 'trim,required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'language_isocode' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.language_isocode',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'items' => 
            array (
            ),
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Service\\IsoCodeService->renderIsoCodeSelectDropdown',
          ),
        ),
        'flag' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_language.flag',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
                2 => '',
              ),
              1 => 
              array (
                0 => 'multiple',
                1 => 'multiple',
                2 => 'flags-multiple',
              ),
              2 => 
              array (
                0 => 'ad',
                1 => 'ad',
                2 => 'flags-ad',
              ),
              3 => 
              array (
                0 => 'ae',
                1 => 'ae',
                2 => 'flags-ae',
              ),
              4 => 
              array (
                0 => 'af',
                1 => 'af',
                2 => 'flags-af',
              ),
              5 => 
              array (
                0 => 'ag',
                1 => 'ag',
                2 => 'flags-ag',
              ),
              6 => 
              array (
                0 => 'ai',
                1 => 'ai',
                2 => 'flags-ai',
              ),
              7 => 
              array (
                0 => 'al',
                1 => 'al',
                2 => 'flags-al',
              ),
              8 => 
              array (
                0 => 'am',
                1 => 'am',
                2 => 'flags-am',
              ),
              9 => 
              array (
                0 => 'an',
                1 => 'an',
                2 => 'flags-an',
              ),
              10 => 
              array (
                0 => 'ao',
                1 => 'ao',
                2 => 'flags-ao',
              ),
              11 => 
              array (
                0 => 'aq',
                1 => 'aq',
                2 => 'flags-aq',
              ),
              12 => 
              array (
                0 => 'ar',
                1 => 'ar',
                2 => 'flags-ar',
              ),
              13 => 
              array (
                0 => 'as',
                1 => 'as',
                2 => 'flags-as',
              ),
              14 => 
              array (
                0 => 'at',
                1 => 'at',
                2 => 'flags-at',
              ),
              15 => 
              array (
                0 => 'au',
                1 => 'au',
                2 => 'flags-au',
              ),
              16 => 
              array (
                0 => 'aw',
                1 => 'aw',
                2 => 'flags-aw',
              ),
              17 => 
              array (
                0 => 'ax',
                1 => 'ax',
                2 => 'flags-ax',
              ),
              18 => 
              array (
                0 => 'az',
                1 => 'az',
                2 => 'flags-az',
              ),
              19 => 
              array (
                0 => 'ba',
                1 => 'ba',
                2 => 'flags-ba',
              ),
              20 => 
              array (
                0 => 'bb',
                1 => 'bb',
                2 => 'flags-bb',
              ),
              21 => 
              array (
                0 => 'bd',
                1 => 'bd',
                2 => 'flags-bd',
              ),
              22 => 
              array (
                0 => 'be',
                1 => 'be',
                2 => 'flags-be',
              ),
              23 => 
              array (
                0 => 'bf',
                1 => 'bf',
                2 => 'flags-bf',
              ),
              24 => 
              array (
                0 => 'bg',
                1 => 'bg',
                2 => 'flags-bg',
              ),
              25 => 
              array (
                0 => 'bh',
                1 => 'bh',
                2 => 'flags-bh',
              ),
              26 => 
              array (
                0 => 'bi',
                1 => 'bi',
                2 => 'flags-bi',
              ),
              27 => 
              array (
                0 => 'bj',
                1 => 'bj',
                2 => 'flags-bj',
              ),
              28 => 
              array (
                0 => 'bl',
                1 => 'bl',
                2 => 'flags-bl',
              ),
              29 => 
              array (
                0 => 'bm',
                1 => 'bm',
                2 => 'flags-bm',
              ),
              30 => 
              array (
                0 => 'bn',
                1 => 'bn',
                2 => 'flags-bn',
              ),
              31 => 
              array (
                0 => 'bo',
                1 => 'bo',
                2 => 'flags-bo',
              ),
              32 => 
              array (
                0 => 'bq',
                1 => 'bq',
                2 => 'flags-bq',
              ),
              33 => 
              array (
                0 => 'br',
                1 => 'br',
                2 => 'flags-br',
              ),
              34 => 
              array (
                0 => 'bs',
                1 => 'bs',
                2 => 'flags-bs',
              ),
              35 => 
              array (
                0 => 'bt',
                1 => 'bt',
                2 => 'flags-bt',
              ),
              36 => 
              array (
                0 => 'bv',
                1 => 'bv',
                2 => 'flags-bv',
              ),
              37 => 
              array (
                0 => 'bw',
                1 => 'bw',
                2 => 'flags-bw',
              ),
              38 => 
              array (
                0 => 'by',
                1 => 'by',
                2 => 'flags-by',
              ),
              39 => 
              array (
                0 => 'bz',
                1 => 'bz',
                2 => 'flags-bz',
              ),
              40 => 
              array (
                0 => 'ca',
                1 => 'ca',
                2 => 'flags-ca',
              ),
              41 => 
              array (
                0 => 'catalonia',
                1 => 'catalonia',
                2 => 'flags-catalonia',
              ),
              42 => 
              array (
                0 => 'cc',
                1 => 'cc',
                2 => 'flags-cc',
              ),
              43 => 
              array (
                0 => 'cd',
                1 => 'cd',
                2 => 'flags-cd',
              ),
              44 => 
              array (
                0 => 'cf',
                1 => 'cf',
                2 => 'flags-cf',
              ),
              45 => 
              array (
                0 => 'cg',
                1 => 'cg',
                2 => 'flags-cg',
              ),
              46 => 
              array (
                0 => 'ch',
                1 => 'ch',
                2 => 'flags-ch',
              ),
              47 => 
              array (
                0 => 'ci',
                1 => 'ci',
                2 => 'flags-ci',
              ),
              48 => 
              array (
                0 => 'ck',
                1 => 'ck',
                2 => 'flags-ck',
              ),
              49 => 
              array (
                0 => 'cl',
                1 => 'cl',
                2 => 'flags-cl',
              ),
              50 => 
              array (
                0 => 'cm',
                1 => 'cm',
                2 => 'flags-cm',
              ),
              51 => 
              array (
                0 => 'cn',
                1 => 'cn',
                2 => 'flags-cn',
              ),
              52 => 
              array (
                0 => 'co',
                1 => 'co',
                2 => 'flags-co',
              ),
              53 => 
              array (
                0 => 'cr',
                1 => 'cr',
                2 => 'flags-cr',
              ),
              54 => 
              array (
                0 => 'cs',
                1 => 'cs',
                2 => 'flags-cs',
              ),
              55 => 
              array (
                0 => 'cu',
                1 => 'cu',
                2 => 'flags-cu',
              ),
              56 => 
              array (
                0 => 'cv',
                1 => 'cv',
                2 => 'flags-cv',
              ),
              57 => 
              array (
                0 => 'cw',
                1 => 'cw',
                2 => 'flags-cw',
              ),
              58 => 
              array (
                0 => 'cx',
                1 => 'cx',
                2 => 'flags-cx',
              ),
              59 => 
              array (
                0 => 'cy',
                1 => 'cy',
                2 => 'flags-cy',
              ),
              60 => 
              array (
                0 => 'cz',
                1 => 'cz',
                2 => 'flags-cz',
              ),
              61 => 
              array (
                0 => 'de',
                1 => 'de',
                2 => 'flags-de',
              ),
              62 => 
              array (
                0 => 'dj',
                1 => 'dj',
                2 => 'flags-dj',
              ),
              63 => 
              array (
                0 => 'dk',
                1 => 'dk',
                2 => 'flags-dk',
              ),
              64 => 
              array (
                0 => 'dm',
                1 => 'dm',
                2 => 'flags-dm',
              ),
              65 => 
              array (
                0 => 'do',
                1 => 'do',
                2 => 'flags-do',
              ),
              66 => 
              array (
                0 => 'dz',
                1 => 'dz',
                2 => 'flags-dz',
              ),
              67 => 
              array (
                0 => 'ec',
                1 => 'ec',
                2 => 'flags-ec',
              ),
              68 => 
              array (
                0 => 'ee',
                1 => 'ee',
                2 => 'flags-ee',
              ),
              69 => 
              array (
                0 => 'eg',
                1 => 'eg',
                2 => 'flags-eg',
              ),
              70 => 
              array (
                0 => 'eh',
                1 => 'eh',
                2 => 'flags-eh',
              ),
              71 => 
              array (
                0 => 'en-us-gb',
                1 => 'en-us-gb',
                2 => 'flags-en-us-gb',
              ),
              72 => 
              array (
                0 => 'england',
                1 => 'england',
                2 => 'flags-gb-eng',
              ),
              73 => 
              array (
                0 => 'er',
                1 => 'er',
                2 => 'flags-er',
              ),
              74 => 
              array (
                0 => 'es',
                1 => 'es',
                2 => 'flags-es',
              ),
              75 => 
              array (
                0 => 'et',
                1 => 'et',
                2 => 'flags-et',
              ),
              76 => 
              array (
                0 => 'eu',
                1 => 'eu',
                2 => 'flags-eu',
              ),
              77 => 
              array (
                0 => 'fi',
                1 => 'fi',
                2 => 'flags-fi',
              ),
              78 => 
              array (
                0 => 'fj',
                1 => 'fj',
                2 => 'flags-fj',
              ),
              79 => 
              array (
                0 => 'fk',
                1 => 'fk',
                2 => 'flags-fk',
              ),
              80 => 
              array (
                0 => 'fm',
                1 => 'fm',
                2 => 'flags-fm',
              ),
              81 => 
              array (
                0 => 'fo',
                1 => 'fo',
                2 => 'flags-fo',
              ),
              82 => 
              array (
                0 => 'fr',
                1 => 'fr',
                2 => 'flags-fr',
              ),
              83 => 
              array (
                0 => 'ga',
                1 => 'ga',
                2 => 'flags-ga',
              ),
              84 => 
              array (
                0 => 'gb',
                1 => 'gb',
                2 => 'flags-gb',
              ),
              85 => 
              array (
                0 => 'gd',
                1 => 'gd',
                2 => 'flags-gd',
              ),
              86 => 
              array (
                0 => 'ge',
                1 => 'ge',
                2 => 'flags-ge',
              ),
              87 => 
              array (
                0 => 'gf',
                1 => 'gf',
                2 => 'flags-gf',
              ),
              88 => 
              array (
                0 => 'gg',
                1 => 'gg',
                2 => 'flags-gg',
              ),
              89 => 
              array (
                0 => 'gh',
                1 => 'gh',
                2 => 'flags-gh',
              ),
              90 => 
              array (
                0 => 'gi',
                1 => 'gi',
                2 => 'flags-gi',
              ),
              91 => 
              array (
                0 => 'gl',
                1 => 'gl',
                2 => 'flags-gl',
              ),
              92 => 
              array (
                0 => 'gm',
                1 => 'gm',
                2 => 'flags-gm',
              ),
              93 => 
              array (
                0 => 'gn',
                1 => 'gn',
                2 => 'flags-gn',
              ),
              94 => 
              array (
                0 => 'gp',
                1 => 'gp',
                2 => 'flags-gp',
              ),
              95 => 
              array (
                0 => 'gq',
                1 => 'gq',
                2 => 'flags-gq',
              ),
              96 => 
              array (
                0 => 'gr',
                1 => 'gr',
                2 => 'flags-gr',
              ),
              97 => 
              array (
                0 => 'gs',
                1 => 'gs',
                2 => 'flags-gs',
              ),
              98 => 
              array (
                0 => 'gt',
                1 => 'gt',
                2 => 'flags-gt',
              ),
              99 => 
              array (
                0 => 'gu',
                1 => 'gu',
                2 => 'flags-gu',
              ),
              100 => 
              array (
                0 => 'gw',
                1 => 'gw',
                2 => 'flags-gw',
              ),
              101 => 
              array (
                0 => 'gy',
                1 => 'gy',
                2 => 'flags-gy',
              ),
              102 => 
              array (
                0 => 'hk',
                1 => 'hk',
                2 => 'flags-hk',
              ),
              103 => 
              array (
                0 => 'hm',
                1 => 'hm',
                2 => 'flags-hm',
              ),
              104 => 
              array (
                0 => 'hn',
                1 => 'hn',
                2 => 'flags-hn',
              ),
              105 => 
              array (
                0 => 'hr',
                1 => 'hr',
                2 => 'flags-hr',
              ),
              106 => 
              array (
                0 => 'ht',
                1 => 'ht',
                2 => 'flags-ht',
              ),
              107 => 
              array (
                0 => 'hu',
                1 => 'hu',
                2 => 'flags-hu',
              ),
              108 => 
              array (
                0 => 'id',
                1 => 'id',
                2 => 'flags-id',
              ),
              109 => 
              array (
                0 => 'ie',
                1 => 'ie',
                2 => 'flags-ie',
              ),
              110 => 
              array (
                0 => 'il',
                1 => 'il',
                2 => 'flags-il',
              ),
              111 => 
              array (
                0 => 'im',
                1 => 'im',
                2 => 'flags-im',
              ),
              112 => 
              array (
                0 => 'in',
                1 => 'in',
                2 => 'flags-in',
              ),
              113 => 
              array (
                0 => 'io',
                1 => 'io',
                2 => 'flags-io',
              ),
              114 => 
              array (
                0 => 'iq',
                1 => 'iq',
                2 => 'flags-iq',
              ),
              115 => 
              array (
                0 => 'ir',
                1 => 'ir',
                2 => 'flags-ir',
              ),
              116 => 
              array (
                0 => 'is',
                1 => 'is',
                2 => 'flags-is',
              ),
              117 => 
              array (
                0 => 'it',
                1 => 'it',
                2 => 'flags-it',
              ),
              118 => 
              array (
                0 => 'jm',
                1 => 'jm',
                2 => 'flags-jm',
              ),
              119 => 
              array (
                0 => 'jo',
                1 => 'jo',
                2 => 'flags-jo',
              ),
              120 => 
              array (
                0 => 'jp',
                1 => 'jp',
                2 => 'flags-jp',
              ),
              121 => 
              array (
                0 => 'ke',
                1 => 'ke',
                2 => 'flags-ke',
              ),
              122 => 
              array (
                0 => 'kg',
                1 => 'kg',
                2 => 'flags-kg',
              ),
              123 => 
              array (
                0 => 'kh',
                1 => 'kh',
                2 => 'flags-kh',
              ),
              124 => 
              array (
                0 => 'ki',
                1 => 'ki',
                2 => 'flags-ki',
              ),
              125 => 
              array (
                0 => 'kl',
                1 => 'kl',
                2 => 'flags-kl',
              ),
              126 => 
              array (
                0 => 'km',
                1 => 'km',
                2 => 'flags-km',
              ),
              127 => 
              array (
                0 => 'kn',
                1 => 'kn',
                2 => 'flags-kn',
              ),
              128 => 
              array (
                0 => 'kp',
                1 => 'kp',
                2 => 'flags-kp',
              ),
              129 => 
              array (
                0 => 'kr',
                1 => 'kr',
                2 => 'flags-kr',
              ),
              130 => 
              array (
                0 => 'kw',
                1 => 'kw',
                2 => 'flags-kw',
              ),
              131 => 
              array (
                0 => 'ky',
                1 => 'ky',
                2 => 'flags-ky',
              ),
              132 => 
              array (
                0 => 'kz',
                1 => 'kz',
                2 => 'flags-kz',
              ),
              133 => 
              array (
                0 => 'la',
                1 => 'la',
                2 => 'flags-la',
              ),
              134 => 
              array (
                0 => 'lb',
                1 => 'lb',
                2 => 'flags-lb',
              ),
              135 => 
              array (
                0 => 'lc',
                1 => 'lc',
                2 => 'flags-lc',
              ),
              136 => 
              array (
                0 => 'li',
                1 => 'li',
                2 => 'flags-li',
              ),
              137 => 
              array (
                0 => 'lk',
                1 => 'lk',
                2 => 'flags-lk',
              ),
              138 => 
              array (
                0 => 'lr',
                1 => 'lr',
                2 => 'flags-lr',
              ),
              139 => 
              array (
                0 => 'ls',
                1 => 'ls',
                2 => 'flags-ls',
              ),
              140 => 
              array (
                0 => 'lt',
                1 => 'lt',
                2 => 'flags-lt',
              ),
              141 => 
              array (
                0 => 'lu',
                1 => 'lu',
                2 => 'flags-lu',
              ),
              142 => 
              array (
                0 => 'lv',
                1 => 'lv',
                2 => 'flags-lv',
              ),
              143 => 
              array (
                0 => 'ly',
                1 => 'ly',
                2 => 'flags-ly',
              ),
              144 => 
              array (
                0 => 'ma',
                1 => 'ma',
                2 => 'flags-ma',
              ),
              145 => 
              array (
                0 => 'mc',
                1 => 'mc',
                2 => 'flags-mc',
              ),
              146 => 
              array (
                0 => 'md',
                1 => 'md',
                2 => 'flags-md',
              ),
              147 => 
              array (
                0 => 'me',
                1 => 'me',
                2 => 'flags-me',
              ),
              148 => 
              array (
                0 => 'mf',
                1 => 'mf',
                2 => 'flags-mf',
              ),
              149 => 
              array (
                0 => 'mg',
                1 => 'mg',
                2 => 'flags-mg',
              ),
              150 => 
              array (
                0 => 'mh',
                1 => 'mh',
                2 => 'flags-mh',
              ),
              151 => 
              array (
                0 => 'mi',
                1 => 'mi',
                2 => 'flags-mi',
              ),
              152 => 
              array (
                0 => 'mk',
                1 => 'mk',
                2 => 'flags-mk',
              ),
              153 => 
              array (
                0 => 'ml',
                1 => 'ml',
                2 => 'flags-ml',
              ),
              154 => 
              array (
                0 => 'mm',
                1 => 'mm',
                2 => 'flags-mm',
              ),
              155 => 
              array (
                0 => 'mn',
                1 => 'mn',
                2 => 'flags-mn',
              ),
              156 => 
              array (
                0 => 'mo',
                1 => 'mo',
                2 => 'flags-mo',
              ),
              157 => 
              array (
                0 => 'mp',
                1 => 'mp',
                2 => 'flags-mp',
              ),
              158 => 
              array (
                0 => 'mq',
                1 => 'mq',
                2 => 'flags-mq',
              ),
              159 => 
              array (
                0 => 'mr',
                1 => 'mr',
                2 => 'flags-mr',
              ),
              160 => 
              array (
                0 => 'ms',
                1 => 'ms',
                2 => 'flags-ms',
              ),
              161 => 
              array (
                0 => 'mt',
                1 => 'mt',
                2 => 'flags-mt',
              ),
              162 => 
              array (
                0 => 'mu',
                1 => 'mu',
                2 => 'flags-mu',
              ),
              163 => 
              array (
                0 => 'mv',
                1 => 'mv',
                2 => 'flags-mv',
              ),
              164 => 
              array (
                0 => 'mw',
                1 => 'mw',
                2 => 'flags-mw',
              ),
              165 => 
              array (
                0 => 'mx',
                1 => 'mx',
                2 => 'flags-mx',
              ),
              166 => 
              array (
                0 => 'my',
                1 => 'my',
                2 => 'flags-my',
              ),
              167 => 
              array (
                0 => 'mz',
                1 => 'mz',
                2 => 'flags-mz',
              ),
              168 => 
              array (
                0 => 'na',
                1 => 'na',
                2 => 'flags-na',
              ),
              169 => 
              array (
                0 => 'nc',
                1 => 'nc',
                2 => 'flags-nc',
              ),
              170 => 
              array (
                0 => 'ne',
                1 => 'ne',
                2 => 'flags-ne',
              ),
              171 => 
              array (
                0 => 'nf',
                1 => 'nf',
                2 => 'flags-nf',
              ),
              172 => 
              array (
                0 => 'ng',
                1 => 'ng',
                2 => 'flags-ng',
              ),
              173 => 
              array (
                0 => 'ni',
                1 => 'ni',
                2 => 'flags-ni',
              ),
              174 => 
              array (
                0 => 'gb-nir',
                1 => 'gb-nir',
                2 => 'flags-gb-nir',
              ),
              175 => 
              array (
                0 => 'nl',
                1 => 'nl',
                2 => 'flags-nl',
              ),
              176 => 
              array (
                0 => 'no',
                1 => 'no',
                2 => 'flags-no',
              ),
              177 => 
              array (
                0 => 'np',
                1 => 'np',
                2 => 'flags-np',
              ),
              178 => 
              array (
                0 => 'nr',
                1 => 'nr',
                2 => 'flags-nr',
              ),
              179 => 
              array (
                0 => 'nu',
                1 => 'nu',
                2 => 'flags-nu',
              ),
              180 => 
              array (
                0 => 'nz',
                1 => 'nz',
                2 => 'flags-nz',
              ),
              181 => 
              array (
                0 => 'om',
                1 => 'om',
                2 => 'flags-om',
              ),
              182 => 
              array (
                0 => 'pa',
                1 => 'pa',
                2 => 'flags-pa',
              ),
              183 => 
              array (
                0 => 'pe',
                1 => 'pe',
                2 => 'flags-pe',
              ),
              184 => 
              array (
                0 => 'pf',
                1 => 'pf',
                2 => 'flags-pf',
              ),
              185 => 
              array (
                0 => 'pg',
                1 => 'pg',
                2 => 'flags-pg',
              ),
              186 => 
              array (
                0 => 'ph',
                1 => 'ph',
                2 => 'flags-ph',
              ),
              187 => 
              array (
                0 => 'pk',
                1 => 'pk',
                2 => 'flags-pk',
              ),
              188 => 
              array (
                0 => 'pl',
                1 => 'pl',
                2 => 'flags-pl',
              ),
              189 => 
              array (
                0 => 'pm',
                1 => 'pm',
                2 => 'flags-pm',
              ),
              190 => 
              array (
                0 => 'pn',
                1 => 'pn',
                2 => 'flags-pn',
              ),
              191 => 
              array (
                0 => 'pr',
                1 => 'pr',
                2 => 'flags-pr',
              ),
              192 => 
              array (
                0 => 'ps',
                1 => 'ps',
                2 => 'flags-ps',
              ),
              193 => 
              array (
                0 => 'pt',
                1 => 'pt',
                2 => 'flags-pt',
              ),
              194 => 
              array (
                0 => 'pw',
                1 => 'pw',
                2 => 'flags-pw',
              ),
              195 => 
              array (
                0 => 'py',
                1 => 'py',
                2 => 'flags-py',
              ),
              196 => 
              array (
                0 => 'qa',
                1 => 'qa',
                2 => 'flags-qa',
              ),
              197 => 
              array (
                0 => 'qc',
                1 => 'qc',
                2 => 'flags-qc',
              ),
              198 => 
              array (
                0 => 're',
                1 => 're',
                2 => 'flags-re',
              ),
              199 => 
              array (
                0 => 'ro',
                1 => 'ro',
                2 => 'flags-ro',
              ),
              200 => 
              array (
                0 => 'rs',
                1 => 'rs',
                2 => 'flags-rs',
              ),
              201 => 
              array (
                0 => 'ru',
                1 => 'ru',
                2 => 'flags-ru',
              ),
              202 => 
              array (
                0 => 'rw',
                1 => 'rw',
                2 => 'flags-rw',
              ),
              203 => 
              array (
                0 => 'sa',
                1 => 'sa',
                2 => 'flags-sa',
              ),
              204 => 
              array (
                0 => 'sb',
                1 => 'sb',
                2 => 'flags-sb',
              ),
              205 => 
              array (
                0 => 'sc',
                1 => 'sc',
                2 => 'flags-sc',
              ),
              206 => 
              array (
                0 => 'gb-sct',
                1 => 'gb-sct',
                2 => 'flags-gb-sct',
              ),
              207 => 
              array (
                0 => 'sd',
                1 => 'sd',
                2 => 'flags-sd',
              ),
              208 => 
              array (
                0 => 'se',
                1 => 'se',
                2 => 'flags-se',
              ),
              209 => 
              array (
                0 => 'sg',
                1 => 'sg',
                2 => 'flags-sg',
              ),
              210 => 
              array (
                0 => 'sh',
                1 => 'sh',
                2 => 'flags-sh',
              ),
              211 => 
              array (
                0 => 'si',
                1 => 'si',
                2 => 'flags-si',
              ),
              212 => 
              array (
                0 => 'sj',
                1 => 'sj',
                2 => 'flags-sj',
              ),
              213 => 
              array (
                0 => 'sk',
                1 => 'sk',
                2 => 'flags-sk',
              ),
              214 => 
              array (
                0 => 'sl',
                1 => 'sl',
                2 => 'flags-sl',
              ),
              215 => 
              array (
                0 => 'sm',
                1 => 'sm',
                2 => 'flags-sm',
              ),
              216 => 
              array (
                0 => 'sn',
                1 => 'sn',
                2 => 'flags-sn',
              ),
              217 => 
              array (
                0 => 'so',
                1 => 'so',
                2 => 'flags-so',
              ),
              218 => 
              array (
                0 => 'sr',
                1 => 'sr',
                2 => 'flags-sr',
              ),
              219 => 
              array (
                0 => 'ss',
                1 => 'ss',
                2 => 'flags-ss',
              ),
              220 => 
              array (
                0 => 'st',
                1 => 'st',
                2 => 'flags-st',
              ),
              221 => 
              array (
                0 => 'sv',
                1 => 'sv',
                2 => 'flags-sv',
              ),
              222 => 
              array (
                0 => 'sx',
                1 => 'sx',
                2 => 'flags-sx',
              ),
              223 => 
              array (
                0 => 'sy',
                1 => 'sy',
                2 => 'flags-sy',
              ),
              224 => 
              array (
                0 => 'sz',
                1 => 'sz',
                2 => 'flags-sz',
              ),
              225 => 
              array (
                0 => 'tc',
                1 => 'tc',
                2 => 'flags-tc',
              ),
              226 => 
              array (
                0 => 'td',
                1 => 'td',
                2 => 'flags-td',
              ),
              227 => 
              array (
                0 => 'tf',
                1 => 'tf',
                2 => 'flags-tf',
              ),
              228 => 
              array (
                0 => 'tg',
                1 => 'tg',
                2 => 'flags-tg',
              ),
              229 => 
              array (
                0 => 'th',
                1 => 'th',
                2 => 'flags-th',
              ),
              230 => 
              array (
                0 => 'tj',
                1 => 'tj',
                2 => 'flags-tj',
              ),
              231 => 
              array (
                0 => 'tk',
                1 => 'tk',
                2 => 'flags-tk',
              ),
              232 => 
              array (
                0 => 'tl',
                1 => 'tl',
                2 => 'flags-tl',
              ),
              233 => 
              array (
                0 => 'tm',
                1 => 'tm',
                2 => 'flags-tm',
              ),
              234 => 
              array (
                0 => 'tn',
                1 => 'tn',
                2 => 'flags-tn',
              ),
              235 => 
              array (
                0 => 'to',
                1 => 'to',
                2 => 'flags-to',
              ),
              236 => 
              array (
                0 => 'tr',
                1 => 'tr',
                2 => 'flags-tr',
              ),
              237 => 
              array (
                0 => 'tt',
                1 => 'tt',
                2 => 'flags-tt',
              ),
              238 => 
              array (
                0 => 'tv',
                1 => 'tv',
                2 => 'flags-tv',
              ),
              239 => 
              array (
                0 => 'tw',
                1 => 'tw',
                2 => 'flags-tw',
              ),
              240 => 
              array (
                0 => 'tz',
                1 => 'tz',
                2 => 'flags-tz',
              ),
              241 => 
              array (
                0 => 'ua',
                1 => 'ua',
                2 => 'flags-ua',
              ),
              242 => 
              array (
                0 => 'ug',
                1 => 'ug',
                2 => 'flags-ug',
              ),
              243 => 
              array (
                0 => 'um',
                1 => 'um',
                2 => 'flags-um',
              ),
              244 => 
              array (
                0 => 'us',
                1 => 'us',
                2 => 'flags-us',
              ),
              245 => 
              array (
                0 => 'uy',
                1 => 'uy',
                2 => 'flags-uy',
              ),
              246 => 
              array (
                0 => 'uz',
                1 => 'uz',
                2 => 'flags-uz',
              ),
              247 => 
              array (
                0 => 'va',
                1 => 'va',
                2 => 'flags-va',
              ),
              248 => 
              array (
                0 => 'vc',
                1 => 'vc',
                2 => 'flags-vc',
              ),
              249 => 
              array (
                0 => 've',
                1 => 've',
                2 => 'flags-ve',
              ),
              250 => 
              array (
                0 => 'vg',
                1 => 'vg',
                2 => 'flags-vg',
              ),
              251 => 
              array (
                0 => 'vi',
                1 => 'vi',
                2 => 'flags-vi',
              ),
              252 => 
              array (
                0 => 'vn',
                1 => 'vn',
                2 => 'flags-vn',
              ),
              253 => 
              array (
                0 => 'vu',
                1 => 'vu',
                2 => 'flags-vu',
              ),
              254 => 
              array (
                0 => 'gb-wls',
                1 => 'gb-wls',
                2 => 'flags-gb-wls',
              ),
              255 => 
              array (
                0 => 'wf',
                1 => 'wf',
                2 => 'flags-wf',
              ),
              256 => 
              array (
                0 => 'ws',
                1 => 'ws',
                2 => 'flags-ws',
              ),
              257 => 
              array (
                0 => 'ye',
                1 => 'ye',
                2 => 'flags-ye',
              ),
              258 => 
              array (
                0 => 'yt',
                1 => 'yt',
                2 => 'flags-yt',
              ),
              259 => 
              array (
                0 => 'za',
                1 => 'za',
                2 => 'flags-za',
              ),
              260 => 
              array (
                0 => 'zm',
                1 => 'zm',
                2 => 'flags-zm',
              ),
              261 => 
              array (
                0 => 'zw',
                1 => 'zw',
                2 => 'flags-zw',
              ),
            ),
            'maxitems' => 1,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,language_isocode,flag,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'sys_log' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_log',
        'label' => 'details',
        'tstamp' => 'tstamp',
        'adminOnly' => true,
        'rootLevel' => 1,
        'hideTable' => true,
        'default_sortby' => 'uid DESC',
      ),
      'columns' => 
      array (
        'tstamp' => 
        array (
          'label' => 'tstamp',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'userid' => 
        array (
          'label' => 'userid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'action' => 
        array (
          'label' => 'action',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recuid' => 
        array (
          'label' => 'recuid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'tablename' => 
        array (
          'label' => 'tablename',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'recpid' => 
        array (
          'label' => 'recpid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'error' => 
        array (
          'label' => 'error',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details' => 
        array (
          'label' => 'details',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'type' => 
        array (
          'label' => 'type',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'details_nr' => 
        array (
          'label' => 'details_nr',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'IP' => 
        array (
          'label' => 'IP',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'log_data' => 
        array (
          'label' => 'log_data',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'event_pid' => 
        array (
          'label' => 'event_pid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'workspace' => 
        array (
          'label' => 'workspace',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'NEWid' => 
        array (
          'label' => 'NEWid',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'channel' => 
        array (
          'label' => 'channel',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'level' => 
        array (
          'label' => 'level',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'tstamp, userid, action, recuid, tablename, recpid, error, details, type, details_nr, IP, log_data, event_pid, workspace, NEWid',
        ),
      ),
    ),
    'sys_news' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_news',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => 1,
        'groupName' => 'backendaccess',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_news',
        ),
        'searchFields' => 'title,content',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'content' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 5,
            'enableRichtext' => true,
            'richtextConfiguration' => 'sys_news',
          ),
        ),
        'crdate' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.creationDate',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,content,crdate,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'backend_layout' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout',
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'sortby' => 'sorting',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-backend_layout',
        ),
        'selicon_field' => 'icon',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 25,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.config',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 'belayoutwizard',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:backend_layout.icon',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,icon,config,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
    ),
    'fe_groups' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'default_sortby' => 'title',
        'groupName' => 'frontendaccess',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
        ),
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups',
        'typeicon_classes' => 
        array (
          'default' => 'status-user-group-frontend',
        ),
        'searchFields' => 'title,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subgroup' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.subgroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'foreign_table_where' => 'AND NOT({#fe_groups}.{#uid} = ###THIS_UID###)',
            'size' => 6,
            'autoSizeMax' => 10,
            'maxitems' => 20,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_groups.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUserGroup',
                1 => 'Tx_Extbase_Domain_Model_FrontendUserGroup',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig, felogin_redirectPid,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUserGroup' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title,subgroup,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_groups.tabs.options,
                TSconfig, felogin_redirectPid,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
    ),
    'fe_users' => 
    array (
      'ctrl' => 
      array (
        'label' => 'username',
        'descriptionColumn' => 'description',
        'default_sortby' => 'username',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'groupName' => 'frontendaccess',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'disable',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'status-user-frontend',
        ),
        'useColumnsForDefaultValues' => 'usergroup,disable,starttime,endtime',
        'searchFields' => 'username,name,first_name,last_name,middle_name,address,telephone,fax,email,title,zip,city,country,company,description',
        'type' => 'tx_extbase_type',
      ),
      'columns' => 
      array (
        'username' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.username',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
            'eval' => 'nospace,trim,lower,uniqueInPid,required',
            'autocomplete' => false,
          ),
        ),
        'password' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.password',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 100,
            'eval' => 'trim,required,password,saltedPassword',
            'autocomplete' => false,
          ),
        ),
        'usergroup' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.usergroup',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'fe_groups',
            'size' => 6,
            'minitems' => 1,
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'eval' => 'trim',
            'max' => 160,
          ),
        ),
        'first_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.first_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'middle_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.middle_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'last_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.last_name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.address',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 20,
            'rows' => 3,
          ),
        ),
        'telephone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.phone',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 30,
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 30,
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim,email',
            'max' => 255,
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.title_person',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.zip',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 10,
            'max' => 10,
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 50,
          ),
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'max' => 40,
          ),
        ),
        'www' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.www',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'company' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.company',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 20,
            'max' => 80,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
            ),
            'maxitems' => 6,
          ),
        ),
        'disable' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'TSconfig' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:TSconfig',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 10,
            'enableTabulator' => true,
            'fixedFont' => true,
          ),
        ),
        'lastlogin' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.lastlogin',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'readOnly' => true,
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'tx_extbase_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:extbase/Resources/Private/Language/locallang_db.xlf:fe_users.tx_extbase_type.Tx_Extbase_Domain_Model_FrontendUser',
                1 => 'Tx_Extbase_Domain_Model_FrontendUser',
              ),
            ),
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'felogin_redirectPid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_redirectPid',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 1,
            'maxitems' => 1,
          ),
        ),
        'felogin_forgotHash' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:felogin_forgotHash',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig, felogin_redirectPid,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
        'Tx_Extbase_Domain_Model_FrontendUser' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    username,password,usergroup,lastlogin,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.personelData,
                    company, title, name, --palette--;;2, address, zip, city, country, telephone, fax, email, www, image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:fe_users.tabs.options,
                    TSconfig, felogin_redirectPid,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    disable,--palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended, tx_extbase_type',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
        2 => 
        array (
          'showitem' => 'first_name,--linebreak--,middle_name,--linebreak--,last_name',
        ),
      ),
    ),
    'sys_template' => 
    array (
      'ctrl' => 
      array (
        'label' => 'title',
        'descriptionColumn' => 'description',
        'tstamp' => 'tstamp',
        'sortby' => 'sorting',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template',
        'versioningWS' => true,
        'groupName' => 'system',
        'origUid' => 't3_origuid',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'adminOnly' => true,
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'root',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-content-template-extension',
          1 => 'mimetypes-x-content-template',
        ),
        'searchFields' => 'title,constants,config',
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 25,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
        ),
        'root' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.root',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.rootDescription',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'clear' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clear',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.clearDescription',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Constants',
              ),
              1 => 
              array (
                0 => 'Setup',
              ),
            ),
            'cols' => 2,
          ),
        ),
        'constants' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.constants',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 48,
            'rows' => 15,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'include_static_file' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_file',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.include_static_fileDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 10,
            'maxitems' => 100,
            'items' => 
            array (
              0 => 
              array (
                0 => 'Fluid Content Elements (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/',
              ),
              1 => 
              array (
                0 => 'Fluid Content Elements CSS (optional) (fluid_styled_content)',
                1 => 'EXT:fluid_styled_content/Configuration/TypoScript/Styling/',
              ),
              2 => 
              array (
                0 => 'Form (form)',
                1 => 'EXT:form/Configuration/TypoScript/',
              ),
              3 => 
              array (
                0 => 'XML Sitemap (seo)',
                1 => 'EXT:seo/Configuration/TypoScript/XmlSitemap',
              ),
              4 => 
              array (
                0 => 'Bootstrap Package: Full Package (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript',
              ),
              5 => 
              array (
                0 => 'Bootstrap Package: Content Elements (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/ContentElement',
              ),
              6 => 
              array (
                0 => 'Bootstrap Package: Bootstrap 4.x (SCSS) (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/Bootstrap4',
              ),
              7 => 
              array (
                0 => 'Bootstrap Package: Bootstrap 5.x (SCSS) (bootstrap_package)',
                1 => 'EXT:bootstrap_package/Configuration/TypoScript/Bootstrap5',
              ),
              8 => 
              array (
                0 => 'Wittemaier Bau GmbH (gowords_typo3project1)',
                1 => 'EXT:gowords_typo3project1/Configuration/TypoScript',
              ),
              9 => 
              array (
                0 => 'Form Captcha (bw_captcha)',
                1 => 'EXT:bw_captcha/Configuration/TypoScript',
              ),
              10 => 
              array (
                0 => 'Jobs (bw_jobs)',
                1 => 'EXT:bw_jobs/Configuration/TypoScript',
              ),
              11 => 
              array (
                0 => 'Cookieman (cookieman)',
                1 => 'EXT:cookieman/Configuration/TypoScript',
              ),
              12 => 
              array (
                0 => 'Cookieman (Example configuration of groups and tracking objects) (cookieman)',
                1 => 'EXT:cookieman/Configuration/TypoScript/Example',
              ),
              13 => 
              array (
                0 => 'CKEditor (rte_ckeditor_fontawesome)',
                1 => 'EXT:rte_ckeditor_fontawesome/Configuration/TypoScript',
              ),
              14 => 
              array (
                0 => 'Cookie Consent (we_cookie_consent)',
                1 => 'EXT:we_cookie_consent/Configuration/TypoScript',
              ),
            ),
            'softref' => 'ext_fileref',
          ),
        ),
        'basedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOnDescription',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'sys_template',
            'maxitems' => 50,
            'autoSizeMax' => 10,
            'default' => '',
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_edit',
                ),
              ),
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.basedOn_add',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'includeStaticAfterBasedOn' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOn',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.includeStaticAfterBasedOnDescription',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'config' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.config',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 15,
            'cols' => 48,
            'wrap' => 'off',
            'enableTabulator' => true,
            'fixedFont' => true,
            'softref' => 'email[subst],url[subst]',
            'renderType' => 't3editor',
            'format' => 'typoscript',
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 48,
          ),
        ),
        'static_file_mode' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode',
          'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_modeDescription',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.static_file_mode.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                title, constants, config,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.options,
                clear, root,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:sys_template.tabs.include,
                includeStaticAfterBasedOn, include_static_file, basedOn, static_file_mode,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,--palette--;;timeRestriction,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                description,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tt_content' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'subheader,bodytext',
        'descriptionColumn' => 'rowDescription',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'editlock' => 'editlock',
        'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:tt_content',
        'delete' => 'deleted',
        'versioningWS' => true,
        'groupName' => 'content',
        'origUid' => 't3_origuid',
        'type' => 'CType',
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'copyAfterDuplFields' => 'colPos,sys_language_uid',
        'useColumnsForDefaultValues' => 'colPos,sys_language_uid,CType',
        'transOrigPointerField' => 'l18n_parent',
        'transOrigDiffSourceField' => 'l18n_diffsource',
        'languageField' => 'sys_language_uid',
        'translationSource' => 'l10n_source',
        'previewRenderer' => 'TYPO3\\CMS\\Backend\\Preview\\StandardContentPreviewRenderer',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
          'fe_group' => 'fe_group',
        ),
        'typeicon_column' => 'CType',
        'typeicon_classes' => 
        array (
          'header' => 'mimetypes-x-content-header',
          'text' => 'mimetypes-x-content-text',
          'textpic' => 'mimetypes-x-content-text-picture',
          'image' => 'mimetypes-x-content-image',
          'textmedia' => 'mimetypes-x-content-text-media',
          'bullets' => 'mimetypes-x-content-list-bullets',
          'table' => 'mimetypes-x-content-table',
          'uploads' => 'mimetypes-x-content-list-files',
          'list' => 'mimetypes-x-content-plugin',
          'shortcut' => 'mimetypes-x-content-link',
          'script' => 'mimetypes-x-content-script',
          'div' => 'mimetypes-x-content-divider',
          'html' => 'mimetypes-x-content-html',
          'default' => 'mimetypes-x-content-text',
          'menu_abstract' => 'content-menu-abstract',
          'menu_categorized_content' => 'content-menu-categorized',
          'menu_categorized_pages' => 'content-menu-categorized',
          'menu_pages' => 'content-menu-pages',
          'menu_subpages' => 'content-menu-pages',
          'menu_recently_updated' => 'content-menu-recently-updated',
          'menu_related_pages' => 'content-menu-related',
          'menu_sitemap' => 'content-menu-sitemap',
          'menu_sitemap_pages' => 'content-menu-sitemap-pages',
          'menu_section' => 'content-menu-section',
          'menu_section_pages' => 'content-menu-section',
          'form_formframework' => 'content-form',
          'felogin_login' => 'mimetypes-x-content-login',
          'accordion' => 'content-bootstrappackage-accordion',
          'audio' => 'content-audio',
          'card_group' => 'content-bootstrappackage-card-group',
          'carousel' => 'content-bootstrappackage-carousel',
          'carousel_small' => 'content-bootstrappackage-carousel',
          'carousel_fullscreen' => 'content-bootstrappackage-carousel',
          'csv' => 'content-bootstrappackage-csv',
          'external_media' => 'content-bootstrappackage-externalmedia',
          'icon_group' => 'content-bootstrappackage-icon-group',
          'listgroup' => 'content-bootstrappackage-listgroup',
          'media' => 'mimetypes-x-content-multimedia',
          'menu_card_list' => 'content-bootstrappackage-menu-card',
          'menu_card_dir' => 'content-bootstrappackage-menu-card',
          'menu_thumbnail_list' => 'content-menu-thumbnail',
          'menu_thumbnail_dir' => 'content-menu-thumbnail',
          'panel' => 'content-panel',
          'quote' => 'content-quote',
          'social_links' => 'content-bootstrappackage-social-links',
          'tab' => 'content-bootstrappackage-tab',
          'textcolumn' => 'content-text-columns',
          'texticon' => 'content-bootstrappackage-texticon',
          'textteaser' => 'content-text-teaser',
          'timeline' => 'content-bootstrappackage-timeline',
          'gallery' => 'content-bootstrappackage-gallery',
        ),
        'searchFields' => 'header,header_link,subheader,bodytext,pi_flexform',
      ),
      'interface' => 
      array (
        'always_description' => 0,
      ),
      'columns' => 
      array (
        'CType' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
                1 => '--div--',
                2 => NULL,
                3 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.0',
                1 => 'header',
                2 => 'content-header',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.1',
                1 => 'text',
                2 => 'content-text',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.2',
                1 => 'textpic',
                2 => 'content-textpic',
                3 => 'default',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.3',
                1 => 'image',
                2 => 'content-image',
                3 => 'default',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.textmedia',
                1 => 'textmedia',
                2 => 'content-textmedia',
                3 => 'default',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
                1 => '--div--',
                2 => NULL,
                3 => 'lists',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.4',
                1 => 'bullets',
                2 => 'content-bullets',
                3 => 'lists',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.5',
                1 => 'table',
                2 => 'content-table',
                3 => 'lists',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.6',
                1 => 'uploads',
                2 => 'content-special-uploads',
                3 => 'lists',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
                1 => '--div--',
                2 => NULL,
                3 => 'menu',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_abstract',
                1 => 'menu_abstract',
                2 => 'content-menu-abstract',
                3 => 'menu',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_content',
                1 => 'menu_categorized_content',
                2 => 'content-menu-categorized',
                3 => 'menu',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_categorized_pages',
                1 => 'menu_categorized_pages',
                2 => 'content-menu-categorized',
                3 => 'menu',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_pages',
                1 => 'menu_pages',
                2 => 'content-menu-pages',
                3 => 'menu',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_subpages',
                1 => 'menu_subpages',
                2 => 'content-menu-pages',
                3 => 'menu',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_recently_updated',
                1 => 'menu_recently_updated',
                2 => 'content-menu-recently-updated',
                3 => 'menu',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_related_pages',
                1 => 'menu_related_pages',
                2 => 'content-menu-related',
                3 => 'menu',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section',
                1 => 'menu_section',
                2 => 'content-menu-section',
                3 => 'menu',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_section_pages',
                1 => 'menu_section_pages',
                2 => 'content-menu-section',
                3 => 'menu',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap',
                1 => 'menu_sitemap',
                2 => 'content-menu-sitemap',
                3 => 'menu',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.menu_sitemap_pages',
                1 => 'menu_sitemap_pages',
                2 => 'content-menu-sitemap-pages',
                3 => 'menu',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
                1 => '--div--',
                2 => NULL,
                3 => 'special',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.13',
                1 => 'shortcut',
                2 => 'content-special-shortcut',
                3 => 'special',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.14',
                1 => 'list',
                2 => 'content-plugin',
                3 => 'special',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.16',
                1 => 'div',
                2 => 'content-special-div',
                3 => 'special',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.I.17',
                1 => 'html',
                2 => 'content-special-html',
                3 => 'special',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:form/Resources/Private/Language/locallang.xlf:form_new_wizard_title',
                1 => 'form_formframework',
                2 => 'content-form',
                3 => 'forms',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:felogin/Resources/Private/Language/Database.xlf:tt_content.CType.felogin_login.title',
                1 => 'felogin_login',
                2 => 'mimetypes-x-content-login',
                3 => 'forms',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.accordion',
                1 => 'accordion',
                2 => 'content-bootstrappackage-accordion',
                3 => 'bootstrap_package',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.audio',
                1 => 'audio',
                2 => 'content-audio',
                3 => 'bootstrap_package',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group',
                1 => 'card_group',
                2 => 'content-bootstrappackage-card-group',
                3 => 'bootstrap_package',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel',
                1 => 'carousel',
                2 => 'content-bootstrappackage-carousel',
                3 => 'bootstrap_package',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_small',
                1 => 'carousel_small',
                2 => 'content-bootstrappackage-carousel',
                3 => 'bootstrap_package',
              ),
              34 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.carousel_fullscreen',
                1 => 'carousel_fullscreen',
                2 => 'content-bootstrappackage-carousel',
                3 => 'bootstrap_package',
              ),
              35 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.csv',
                1 => 'csv',
                2 => 'content-bootstrappackage-csv',
                3 => 'bootstrap_package',
              ),
              36 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.external_media',
                1 => 'external_media',
                2 => 'content-bootstrappackage-externalmedia',
                3 => 'bootstrap_package',
              ),
              37 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.gallery',
                1 => 'gallery',
                2 => 'content-bootstrappackage-gallery',
                3 => 'bootstrap_package',
              ),
              38 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group',
                1 => 'icon_group',
                2 => 'content-bootstrappackage-icon-group',
                3 => 'bootstrap_package',
              ),
              39 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.listgroup',
                1 => 'listgroup',
                2 => 'content-bootstrappackage-listgroup',
                3 => 'bootstrap_package',
              ),
              40 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.media',
                1 => 'media',
                2 => 'mimetypes-x-content-multimedia',
                3 => 'bootstrap_package',
              ),
              41 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_list',
                1 => 'menu_card_list',
                2 => 'content-bootstrappackage-menu-card',
                3 => 'bootstrap_package',
              ),
              42 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card_dir',
                1 => 'menu_card_dir',
                2 => 'content-bootstrappackage-menu-card',
                3 => 'bootstrap_package',
              ),
              43 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_list',
                1 => 'menu_thumbnail_list',
                2 => 'content-menu-thumbnail',
                3 => 'bootstrap_package',
              ),
              44 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail_dir',
                1 => 'menu_thumbnail_dir',
                2 => 'content-menu-thumbnail',
                3 => 'bootstrap_package',
              ),
              45 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.panel',
                1 => 'panel',
                2 => 'content-panel',
                3 => 'bootstrap_package',
              ),
              46 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.quote',
                1 => 'quote',
                2 => 'content-quote',
                3 => 'bootstrap_package',
              ),
              47 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.social_links',
                1 => 'social_links',
                2 => 'content-bootstrappackage-social-links',
                3 => 'bootstrap_package',
              ),
              48 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.tab',
                1 => 'tab',
                2 => 'content-bootstrappackage-tab',
                3 => 'bootstrap_package',
              ),
              49 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textcolumn',
                1 => 'textcolumn',
                2 => 'content-text-columns',
                3 => 'bootstrap_package',
              ),
              50 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.texticon',
                1 => 'texticon',
                2 => 'content-bootstrappackage-texticon',
                3 => 'bootstrap_package',
              ),
              51 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.textteaser',
                1 => 'textteaser',
                2 => 'content-text-teaser',
                3 => 'bootstrap_package',
              ),
              52 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.timeline',
                1 => 'timeline',
                2 => 'content-bootstrappackage-timeline',
                3 => 'bootstrap_package',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.standard',
              'bootstrap_package' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:theme_name',
              'lists' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.lists',
              'menu' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.menu',
              'forms' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.forms',
              'special' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType.div.special',
            ),
            'default' => 'text',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'editlock' => 
        array (
          'displayCond' => 'HIDE_FOR_NON_ADMINS',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:editlock',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'fe_group' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.fe_group',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'size' => 5,
            'maxitems' => 20,
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hide_at_login',
                1 => -1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.any_login',
                1 => -2,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.usergroups',
                1 => '--div--',
              ),
            ),
            'exclusiveKeys' => '-1,-2',
            'foreign_table' => 'fe_groups',
          ),
        ),
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'categories' => 
        array (
          'config' => 
          array (
            'type' => 'category',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'relationship' => 'manyToMany',
            'maxitems' => 99999,
            'default' => 0,
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tt_content',
              'fieldname' => 'categories',
            ),
          ),
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.categories',
          'exclude' => true,
        ),
        'l18n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND {#tt_content}.{#pid}=###CURRENT_PID### AND {#tt_content}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_source' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'frame_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_before',
                1 => 'ruler-before',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.ruler_after',
                1 => 'ruler-after',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent',
                1 => 'indent',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_left',
                1 => 'indent-left',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.indent_right',
                1 => 'indent-right',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class.none',
                1 => 'none',
              ),
            ),
            'default' => 'default',
          ),
          'onChange' => 'reload',
        ),
        'space_before_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'space_after_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_small',
                1 => 'extra-small',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_small',
                1 => 'small',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_medium',
                1 => 'medium',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_large',
                1 => 'large',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_class_extra_large',
                1 => 'extra-large',
              ),
            ),
            'default' => '',
          ),
        ),
        'bullets_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bullets_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'colPos' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'TYPO3\\CMS\\Backend\\View\\BackendLayoutView->colPosListItemProcFunc',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.0',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.normal',
                1 => '0',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos.I.3',
                1 => '3',
              ),
            ),
            'default' => 0,
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'date,int',
            'default' => 0,
          ),
        ),
        'header' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.5',
                1 => '5',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout.I.6',
                1 => '100',
              ),
            ),
            'default' => 0,
          ),
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.1',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.2',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position.I.3',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'rowDescription' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.description',
          'config' => 
          array (
            'type' => 'text',
            'rows' => 5,
            'cols' => 30,
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
            'softref' => 'email[subst]',
          ),
        ),
        'bodytext' => 
        array (
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 80,
            'rows' => 15,
            'softref' => 'typolink_tag,email[subst],url',
            'search' => 
            array (
              'andWhere' => '{#CType}=\'text\' OR {#CType}=\'textpic\' OR {#CType}=\'textmedia\'',
            ),
          ),
        ),
        'image' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.images',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'assets' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'assets',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                --palette--;;audioOverlayPalette,
                                --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                --palette--;;videoOverlayPalette,
                                --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                --palette--;;imageoverlayPalette,
                                --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.asset_references.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'imagewidth' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagewidth',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageheight' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageheight',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'imageorient' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.0',
                1 => 0,
                2 => 'content-beside-text-img-above-center',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.1',
                1 => 1,
                2 => 'content-beside-text-img-above-right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.2',
                1 => 2,
                2 => 'content-beside-text-img-above-left',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.3',
                1 => 8,
                2 => 'content-beside-text-img-below-center',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.4',
                1 => 9,
                2 => 'content-beside-text-img-below-right',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.5',
                1 => 10,
                2 => 'content-beside-text-img-below-left',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.6',
                1 => 17,
                2 => 'content-inside-text-img-right',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.7',
                1 => 18,
                2 => 'content-inside-text-img-left',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.9',
                1 => 25,
                2 => 'content-beside-text-img-right',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient.I.10',
                1 => 26,
                2 => 'content-beside-text-img-left',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.125',
                1 => '125',
                2 => 'content-bootstrappackage-beside-text-img-centered-right',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.imageorient.126',
                1 => '126',
                2 => 'content-bootstrappackage-beside-text-img-centered-left',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'imageborder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageborder',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
              6 => 
              array (
                0 => '7',
                1 => 7,
              ),
              7 => 
              array (
                0 => '8',
                1 => 8,
              ),
            ),
            'default' => 2,
          ),
        ),
        'cols' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:cols.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => '1',
                1 => '1',
              ),
              2 => 
              array (
                0 => '2',
                1 => '2',
              ),
              3 => 
              array (
                0 => '3',
                1 => '3',
              ),
              4 => 
              array (
                0 => '4',
                1 => '4',
              ),
              5 => 
              array (
                0 => '5',
                1 => '5',
              ),
              6 => 
              array (
                0 => '6',
                1 => '6',
              ),
              7 => 
              array (
                0 => '7',
                1 => '7',
              ),
              8 => 
              array (
                0 => '8',
                1 => '8',
              ),
              9 => 
              array (
                0 => '9',
                1 => '9',
              ),
            ),
            'default' => 0,
          ),
        ),
        'pages' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.startingpoint',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'pages',
            'size' => 3,
            'maxitems' => 50,
          ),
        ),
        'recursive' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.recursive',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.0',
                1 => '0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.1',
                1 => '1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.2',
                1 => '2',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.3',
                1 => '3',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.4',
                1 => '4',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:recursive.I.5',
                1 => '250',
              ),
            ),
            'default' => 0,
          ),
        ),
        'list_type' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                2 => '',
                3 => 'none',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_plugin_detail.xlf:title',
                1 => 'bwjobs_detail',
                2 => 'EXT:bw_jobs/Resources/Public/Icons/Extension.svg',
                3 => 'default',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_plugin_list.xlf:title',
                1 => 'bwjobs_list',
                2 => 'EXT:bw_jobs/Resources/Public/Icons/Extension.svg',
                3 => 'default',
              ),
              3 => 
              array (
                0 => 'Cookie List',
                1 => 'wecookieconsent_pi1',
                2 => 'EXT:we_cookie_consent/ext_icon.svg',
                3 => 'default',
              ),
            ),
            'itemGroups' => 
            array (
              'default' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value',
            ),
            'sortItems' => 
            array (
              'label' => 'asc',
            ),
            'default' => '',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
        ),
        'file_collections' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections',
          'config' => 
          array (
            'type' => 'group',
            'localizeReferencesAtParentLocalization' => true,
            'allowed' => 'sys_file_collection',
            'foreign_table' => 'sys_file_collection',
            'size' => 5,
            'fieldControl' => 
            array (
              'addRecord' => 
              array (
                'disabled' => false,
                'options' => 
                array (
                  'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:file_mountpoints_add_title',
                  'setValue' => 'prepend',
                ),
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => '',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => '',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.addFileReference',
              'showPossibleLocalizationRecords' => true,
            ),
          ),
        ),
        'filelink_size' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'filelink_sorting' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.none',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.extension',
                1 => 'extension',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.name',
                1 => 'name',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.type',
                1 => 'type',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.size',
                1 => 'size',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.creation_date',
                1 => 'creation_date',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.modification_date',
                1 => 'modification_date',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting.title',
                1 => 'title',
              ),
            ),
          ),
        ),
        'filelink_sorting_direction' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.ascending',
                1 => 'asc',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_sorting_direction.descending',
                1 => 'desc',
              ),
            ),
          ),
        ),
        'target' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'valuePicker' => 
            array (
              'items' => 
              array (
                0 => 
                array (
                  0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:target.I.1',
                  1 => '_blank',
                ),
              ),
            ),
            'default' => '',
          ),
        ),
        'records' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records',
          'config' => 
          array (
            'type' => 'group',
            'allowed' => 'tt_content',
            'size' => 5,
            'maxitems' => 200,
          ),
        ),
        'sectionIndex' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 1,
          ),
        ),
        'linkToTop' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'pi_flexform' => 
        array (
          'l10n_display' => 'hideDiff',
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pi_flexform',
          'config' => 
          array (
            'type' => 'flex',
            'ds_pointerField' => 'list_type,CType',
            'ds' => 
            array (
              'default' => '
                        <T3DataStructure>
                          <ROOT>
                            <type>array</type>
                            <el>
                                <!-- Repeat an element like "xmlTitle" beneath for as many elements you like. Remember to name them uniquely  -->
                              <xmlTitle>
                                <TCEforms>
                                    <label>The Title:</label>
                                    <config>
                                        <type>input</type>
                                        <size>48</size>
                                    </config>
                                </TCEforms>
                              </xmlTitle>
                            </el>
                          </ROOT>
                        </T3DataStructure>
                    ',
              '*,form_formframework' => 'FILE:EXT:form/Configuration/FlexForms/FormFramework.xml',
              '*,felogin_login' => 'FILE:EXT:felogin/Configuration/FlexForms/Login.xml',
              '*,accordion' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Accordion.xml',
              '*,card_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/CardGroup.xml',
              '*,carousel' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_small' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,carousel_fullscreen' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Carousel.xml',
              '*,icon_group' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/IconGroup.xml',
              '*,menu_card_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_card_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuCard.xml',
              '*,menu_thumbnail_list' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,menu_thumbnail_dir' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/MenuThumbnail.xml',
              '*,tab' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Tab.xml',
              '*,timeline' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/Timeline.xml',
              'bwjobs_detail,list' => 'FILE:EXT:bw_jobs/Configuration/FlexForms/flexform_detail.xml',
              'bwjobs_list,list' => 'FILE:EXT:bw_jobs/Configuration/FlexForms/flexform_list.xml',
              'wecookieconsent_pi1,list' => 'FILE:EXT:we_cookie_consent/Configuration/FlexForms/flexform_pi1.xml',
            ),
            'search' => 
            array (
              'andWhere' => '{#CType}=\'list\'',
            ),
          ),
        ),
        'accessibility_title' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'accessibility_bypass' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'accessibility_bypass_text' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:accessibility_bypass_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'l18n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => '',
          ),
        ),
        'selected_categories' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:selected_categories',
          'config' => 
          array (
            'type' => 'category',
            'relationship' => 'oneToMany',
            'foreign_table' => 'sys_category',
            'size' => 20,
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'maxitems' => 99999,
          ),
        ),
        'category_field' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:category_field',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'maxitems' => 1,
            'itemsProcFunc' => 'TYPO3\\CMS\\Core\\Hooks\\TcaItemsProcessorFunctions->populateAvailableCategoryFields',
            'itemsProcConfig' => 
            array (
              'table' => 'tt_content',
            ),
          ),
        ),
        'table_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.striped',
                1 => 'striped',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_class.bordered',
                1 => 'bordered',
              ),
            ),
            'default' => '',
          ),
        ),
        'table_caption' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_caption',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'table_delimiter' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.124',
                1 => 124,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.59',
                1 => 59,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.44',
                1 => 44,
              ),
              3 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.58',
                1 => 58,
              ),
              4 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_delimiter.9',
                1 => 9,
              ),
            ),
            'default' => 124,
          ),
        ),
        'table_enclosure' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.39',
                1 => 39,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_enclosure.34',
                1 => 34,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_header_position' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_header_position.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'table_tfoot' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.table_tfoot',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_description',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
          ),
        ),
        'uploads_type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.0',
                1 => 0,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.1',
                1 => 1,
              ),
              2 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.uploads_type.2',
                1 => 2,
              ),
            ),
            'default' => 0,
          ),
        ),
        'tx_impexp_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'tx_bootstrappackage_accordion_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'tx_bootstrappackage_card_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'external_media_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
            'max' => 1024,
          ),
        ),
        'external_media_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.external_media_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '16:9',
                1 => '16by9',
              ),
              1 => 
              array (
                0 => '4:3',
                1 => '4by3',
              ),
            ),
          ),
        ),
        'tx_bootstrappackage_icon_group_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'panel_class' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.panel_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.tertiary',
                1 => 'tertiary',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.quaternary',
                1 => 'quaternary',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.success',
                1 => 'success',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.info',
                1 => 'info',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.warning',
                1 => 'warning',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.danger',
                1 => 'danger',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.lighter',
                1 => 'lighter',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.light',
                1 => 'light',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.dark',
                1 => 'dark',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.darker',
                1 => 'darker',
              ),
            ),
          ),
        ),
        'quote_source' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'quote_link' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'tx_bootstrappackage_tab_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 1,
            'maxitems' => 1,
          ),
        ),
        'icon_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.right',
                1 => 'right',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.top',
                1 => 'top',
              ),
            ),
          ),
        ),
        'icon_type' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_type',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 'default',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.square',
                1 => 'square',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.circle',
                1 => 'circle',
              ),
            ),
          ),
        ),
        'icon_size' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_size',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                1 => 'medium',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                1 => 'large',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.awesome',
                1 => 'awesome',
              ),
            ),
          ),
        ),
        'icon_color' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_color',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#FFFFFF',
          ),
        ),
        'icon_background' => 
        array (
          'displayCond' => 'FIELD:icon_type:!=:default',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon_background',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#333333',
          ),
        ),
        'tx_bootstrappackage_timeline_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'frame_layout' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.frame_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'embedded',
                1 => 'embedded',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color_class' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_color_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'none',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'tertiary',
                1 => 'tertiary',
              ),
              4 => 
              array (
                0 => 'quaternary',
                1 => 'quaternary',
              ),
              5 => 
              array (
                0 => 'light',
                1 => 'light',
              ),
              6 => 
              array (
                0 => 'dark',
                1 => 'dark',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                1 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                2 => 
                array (
                  'showitem' => '
                            crop,
                            --palette--;;filePalette
                        ',
                ),
                3 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                4 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
                5 => 
                array (
                  'showitem' => '
                            --palette--;;filePalette
                        ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'displayCond' => 'FIELD:frame_class:!=:none',
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'readmore_label' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.readmore_label',
          'config' => 
          array (
            'type' => 'input',
            'eval' => 'trim',
            'size' => 50,
            'max' => 255,
          ),
        ),
        'teaser' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.teaser',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'softref' => 'typolink_tag',
            'cols' => '40',
            'rows' => '3',
          ),
        ),
        'tx_bootstrappackage_carousel_item' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_field' => 'tt_content',
            'appearance' => 
            array (
              'useSortable' => true,
              'showSynchronizationLink' => true,
              'showAllLocalizationLink' => true,
              'showPossibleLocalizationRecords' => true,
              'expandSingle' => true,
              'enabledControls' => 
              array (
                'localize' => true,
              ),
            ),
            'behaviour' => 
            array (
              'mode' => 'select',
            ),
          ),
        ),
        'file_folder' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.file_folder',
          'config' => 
          array (
            'type' => 'group',
            'internal_type' => 'folder',
          ),
        ),
        'aspect_ratio' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.aspect_ratio',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                1 => '1.3333333333333',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                1 => '1.7777777777778',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                1 => '1',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'items_per_page' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.items_per_page',
          'config' => 
          array (
            'type' => 'input',
            'size' => 2,
            'eval' => 'trim,int',
            'range' => 
            array (
              'lower' => 1,
              'upper' => 50,
            ),
            'default' => 10,
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'CType',
        ),
        'bullets' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bullets_type,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'div' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'header' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'text' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textpic' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextpicPreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image, file_folder, filelink_sorting,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'textmedia' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\TextmediaPreviewRenderer',
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                    assets,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
            'assets' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'image' => 
        array (
          'previewRenderer' => 'TYPO3\\CMS\\Frontend\\Preview\\ImagePreviewRenderer',
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                    image, file_folder, filelink_sorting,
                    --palette--;;mediaAdjustments,
                    --palette--;;gallerySettings,
                    --palette--;;imagelinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'html' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
        'list' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin,
                    list_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:list_type_formlabel,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.list_formlabel,
                    recursive,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'subtype_value_field' => 'list_type',
          'subtypes_excludelist' => 
          array (
            'bwjobs_detail' => 'select_key,pages,recursive',
            'bwjobs_list' => 'select_key,pages,recursive',
          ),
          'subtypes_addlist' => 
          array (
            'bwjobs_detail' => 'pi_flexform',
            'bwjobs_list' => 'pi_flexform',
            'wecookieconsent_pi1' => 'pi_flexform',
          ),
        ),
        'menu_categorized_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'pages',
                ),
              ),
            ),
          ),
        ),
        'menu_categorized_content' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    selected_categories,
                    category_field,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'selected_categories' => 
            array (
              'config' => 
              array (
                'minitems' => 1,
              ),
            ),
            'category_field' => 
            array (
              'config' => 
              array (
                'itemsProcConfig' => 
                array (
                  'table' => 'tt_content',
                ),
              ),
            ),
          ),
        ),
        'menu_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_subpages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_abstract' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_recently_updated' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_related_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_section_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'menu_sitemap_pages' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                    --palette--;;menu_accessibility,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'shortcut' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.shortcut_formlabel,
                    records;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:records_formlabel,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'header' => 
            array (
              'description' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.description.ALT',
            ),
          ),
        ),
        'table' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.table.bodytext,
                    --palette--;;tableconfiguration,
                    table_caption,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;tablelayout,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 'textTable',
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'uploads' => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers,
                    --palette--;;uploads,
                    --palette--;;uploadslayout,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
        'form_formframework' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
          'previewRenderer' => 'TYPO3\\CMS\\Form\\Hooks\\FormPagePreviewRenderer',
        ),
        'felogin_login' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    --palette--;;general,
                    --palette--;;headers, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.plugin, pi_flexform,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                    --palette--;;frames,
                    --palette--;;appearanceLinks,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                    --palette--;;language,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    --palette--;;hidden,
                    --palette--;;access,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                    categories,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                    rowDescription,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
        'accordion' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_accordion_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'audio' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                assets,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'mp3',
                    ),
                  ),
                ),
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'mp3',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'card_group' => 
        array (
          'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            tx_bootstrappackage_card_group_item,
        --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.card_group.options,
            pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel_small' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'carousel_fullscreen' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_carousel_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'csv' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --palette--;;tableconfiguration,
                --palette--;;tablelayout,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'csv',
                    ),
                  ),
                ),
                'minitems' => 0,
                'maxitems' => 1,
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'csv',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'external_media' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.palette.external_media;external_media,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'icon_group' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_icon_group_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:content_element.icon_group.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'listgroup' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.bulletlist_formlabel',
              'config' => 
              array (
                'wrap' => 'off',
              ),
            ),
          ),
        ),
        'media' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                assets,
                file_folder,
                filelink_sorting,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments;mediaAdjustments,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings;gallerySettings,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'assets' => 
            array (
              'config' => 
              array (
                'filter' => 
                array (
                  0 => 
                  array (
                    'parameters' => 
                    array (
                      'allowedFileExtensions' => 'youtube, vimeo',
                    ),
                  ),
                ),
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'uid_local' => 
                    array (
                      'config' => 
                      array (
                        'appearance' => 
                        array (
                          'elementBrowserAllowed' => 'youtube, vimeo',
                        ),
                      ),
                    ),
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'menu_card_list' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                readmore_label,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_card_dir' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
                readmore_label,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.card.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_thumbnail_list' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'menu_thumbnail_dir' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                pages;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:pages.ALT.menu_formlabel,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:menu.thumbnail.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.accessibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'panel' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header_minimal,
                bodytext,
                panel_class,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'quote' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
                quote_link;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.link,
                quote_source;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.source,
                bodytext;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:quote.text,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'social_links' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'tab' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_tab_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'textcolumn' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'texticon' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                bodytext,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.icon,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.icon;bootstrap_package_icons,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'textteaser' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                teaser,
                bodytext,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel',
              'config' => 
              array (
                'enableRichtext' => true,
              ),
            ),
          ),
        ),
        'timeline' => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
                tx_bootstrappackage_timeline_item,
            --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline.options,
                pi_flexform;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:advanced,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
        'gallery' => 
        array (
          'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.images,
                image,
                file_folder,
                filelink_sorting,
                --palette--;;mediaAdjustments,
                --palette--;;gallerySettings, aspect_ratio, items_per_page,
                --palette--;;imagelinks,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;frames,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended',
        ),
      ),
      'palettes' => 
      array (
        'general' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general',
          'showitem' => '
                CType;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                colPos;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:colPos_formlabel,
            ',
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel
            ',
        ),
        'headers' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers',
          'showitem' => '
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
                --linebreak--,
                header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
                header_position;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_position_formlabel,
                date;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:date_formlabel,
                --linebreak--,
                header_link;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_link_formlabel,
                --linebreak--,
                subheader;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:subheader_formlabel
            ',
        ),
        'gallerySettings' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.gallerySettings',
          'showitem' => '
                imageorient;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imageorient_formlabel,
                imagecols;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:imagecols_formlabel
            ',
        ),
        'mediaAdjustments' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments',
          'showitem' => '
                imagewidth;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imagewidth,
                imageheight;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageheight,
                imageborder;LLL:EXT:frontend/Resources/Private/Language/Database.xlf:tt_content.palette.mediaAdjustments.imageborder
            ',
        ),
        'imagelinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks',
          'showitem' => '
                image_zoom;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:image_zoom_formlabel
            ',
        ),
        'uploads' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media',
          'showitem' => '
                media;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media.ALT.uploads_formlabel,
                --linebreak--,
                file_collections;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:file_collections.ALT.uploads_formlabel,
                --linebreak--,
                filelink_sorting,
                filelink_sorting_direction,
                target
            ',
        ),
        'menu_accessibility' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility',
          'showitem' => '
                accessibility_title;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_title_formlabel,
                --linebreak--,
                accessibility_bypass;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_formlabel,
                accessibility_bypass_text;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:menu.ALT.accessibility_bypass_text_formlabel
            ',
        ),
        'hidden' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:field.default.hidden
            ',
        ),
        'language' => 
        array (
          'showitem' => '
                sys_language_uid;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,l18n_parent
            ',
        ),
        'access' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access',
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel,
                --linebreak--,
                fe_group;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:fe_group_formlabel,
                --linebreak--,editlock
            ',
        ),
        'uploadslayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout',
          'showitem' => '
                filelink_size;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:filelink_size_formlabel,
                uploads_description,
                uploads_type
            ',
        ),
        'appearanceLinks' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks',
          'showitem' => '
                sectionIndex;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sectionIndex_formlabel,
                linkToTop;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:linkToTop_formlabel
            ',
        ),
        'frames' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
          'showitem' => '
                layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
                frame_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:frame_class_formlabel,
                space_before_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_before_class_formlabel,
                space_after_class;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:space_after_class_formlabel,
            
    --linebreak--,
    frame_layout,
    --linebreak--,
    background_color_class,
    --linebreak--,
    background_image,
    background_image_options,
',
        ),
        'tableconfiguration' => 
        array (
          'showitem' => '
                table_delimiter,
                table_enclosure
            ',
        ),
        'tablelayout' => 
        array (
          'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout',
          'showitem' => '
                cols,
                table_class,
                table_header_position,
                table_tfoot
            ',
        ),
        'external_media' => 
        array (
          'showitem' => '
        external_media_source, --linebreak--,
        external_media_ratio
    ',
        ),
        'bootstrap_package_icons' => 
        array (
          'showitem' => '
        icon_position, icon_type, icon_size, --linebreak--,
        icon_color, icon_background, --linebreak--,
        icon_set, --linebreak--,
        icon, icon_file
    ',
        ),
        'header_minimal' => 
        array (
          'showitem' => '
        header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_formlabel,
        --linebreak--,
        header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
    ',
        ),
      ),
    ),
    'be_dashboards' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:be_dashboard',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'adminOnly' => true,
        'rootLevel' => 1,
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'default_sortby' => 'crdate DESC',
        'typeicon_classes' => 
        array (
          'default' => 'content-dashboard',
        ),
        'searchFields' => 'identifier,title',
      ),
      'columns' => 
      array (
        'hidden' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.enabled',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
          ),
        ),
        'identifier' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:identifier',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:dashboard/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
            'eval' => 'required',
          ),
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    identifier,title,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden, --palette--;;timeRestriction,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
            ',
        ),
      ),
      'palettes' => 
      array (
        'timeRestriction' => 
        array (
          'showitem' => 'starttime, endtime',
        ),
      ),
    ),
    'tx_impexp_presets' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:tx_impexp_presets',
        'label' => 'title',
        'default_sortby' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'user_uid',
        'typeicon_classes' => 
        array (
          'default' => 'actions-cog',
        ),
        'hideTable' => true,
        'rootLevel' => -1,
      ),
      'columns' => 
      array (
        'title' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:title',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'public' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:public',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'user_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:user_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'item_uid' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:item_uid',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'preset_data' => 
        array (
          'label' => 'LLL:EXT:impexp/Resources/Private/Language/locallang_tca.xlf:preset_data',
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'title, public, user_uid, item_uid, preset_data',
        ),
      ),
    ),
    'tx_extensionmanager_domain_model_extension' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension',
        'label' => 'uid',
        'default_sortby' => '',
        'hideTable' => true,
        'rootLevel' => 1,
        'adminOnly' => true,
        'typeicon_classes' => 
        array (
          'default' => 'empty-icon',
        ),
      ),
      'columns' => 
      array (
        'extension_key' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.extensionkey',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.version',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'alldownloadcounter' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'integer_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.integerversion',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'title' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'description' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.state',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'category' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.category',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 1000,
            ),
            'eval' => 'int',
          ),
        ),
        'last_updated' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.lastupdated',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
          ),
        ),
        'update_comment' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.updatecomment',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'rows' => 5,
          ),
        ),
        'author_name' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authorname',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'author_email' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.authoremail',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'current_version' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.currentversion',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'review_state' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.reviewstate',
          'config' => 
          array (
            'type' => 'check',
            'size' => 1,
          ),
        ),
        'md5hash' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.md5hash',
          'config' => 
          array (
            'type' => 'input',
            'size' => 1,
          ),
        ),
        'serialized_dependencies' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.serializedDependencies',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
        'documentation_link' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.documentation_link',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'distribution_welcome_image' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.distribution_welcome_image',
          'config' => 
          array (
            'type' => 'input',
          ),
        ),
        'remote' => 
        array (
          'label' => 'LLL:EXT:extensionmanager/Resources/Private/Language/locallang_db.xlf:tx_extensionmanager_domain_model_extension.remote',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => 'extensionkey, version, integer_version, title, description, state, category, last_updated, update_comment, author_name, author_email, review_state, md5hash, serialized_dependencies, documentation_link, distribution_image, distribution_welcome_image',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
      ),
    ),
    'sys_note' => 
    array (
      'ctrl' => 
      array (
        'label' => 'subject',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser',
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'delete' => 'deleted',
        'groupName' => 'content',
        'title' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note',
        'typeicon_classes' => 
        array (
          'default' => 'mimetypes-x-sys_note',
        ),
        'sortby' => 'sorting',
        'searchFields' => 'subject,message',
      ),
      'columns' => 
      array (
        'category' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.category',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '0',
                2 => 'sysnote-type-0',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.1',
                1 => '1',
                2 => 'sysnote-type-1',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.3',
                1 => '3',
                2 => 'sysnote-type-3',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.4',
                1 => '4',
                2 => 'sysnote-type-4',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.category.I.2',
                1 => '2',
                2 => 'sysnote-type-2',
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
        'subject' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.subject',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
          ),
        ),
        'message' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.message',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 15,
          ),
        ),
        'personal' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.personal',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
          ),
        ),
        'position' => 
        array (
          'label' => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.top',
                1 => 1,
              ),
              1 => 
              array (
                0 => 'LLL:EXT:sys_note/Resources/Private/Language/locallang_tca.xlf:sys_note.position.bottom',
                1 => 0,
              ),
            ),
            'default' => 0,
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'disabled' => false,
              ),
            ),
          ),
        ),
      ),
      'types' => 
      array (
        0 => 
        array (
          'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                category, subject,message,position,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                personal,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
        ),
      ),
    ),
    'tx_bootstrappackage_accordion_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-accordion-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'accordion\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_accordion_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_accordion_item.pid=###CURRENT_PID### AND tx_bootstrappackage_accordion_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.top',
                1 => 'top',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.right',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.mediaorient.bottom',
                1 => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:accordion_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_card_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-card-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header;header,
                image,
                bodytext,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link;link,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                --linebreak--,
                subheader,
            ',
        ),
        'link' => 
        array (
          'showitem' => '
                link,
                link_title,
                --linebreak--,
                link_class,
                --linebreak--,
                link_icon_set,
                --linebreak--,
                link_icon_identifier,
                link_icon,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'card_group\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_card_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_card_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_card_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.bodytext',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'link_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'link_icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'link_icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon_identifier',
          'displayCond' => 'FIELD:link_icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'link_icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'link_icon' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_icon',
          'displayCond' => 'FIELD:link_icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'link_icon',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        'link_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:card_group_item.link_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'default',
                1 => 'default',
              ),
              1 => 
              array (
                0 => 'primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'tertiary',
                1 => 'tertiary',
              ),
              4 => 
              array (
                0 => 'quaternary',
                1 => 'quaternary',
              ),
              5 => 
              array (
                0 => 'success',
                1 => 'success',
              ),
              6 => 
              array (
                0 => 'info',
                1 => 'info',
              ),
              7 => 
              array (
                0 => 'warning',
                1 => 'warning',
              ),
              8 => 
              array (
                0 => 'danger',
                1 => 'danger',
              ),
              9 => 
              array (
                0 => 'outline-default',
                1 => 'outline-default',
              ),
              10 => 
              array (
                0 => 'outline-primary',
                1 => 'outline-primary',
              ),
              11 => 
              array (
                0 => 'outline-secondary',
                1 => 'outline-secondary',
              ),
              12 => 
              array (
                0 => 'outline-tertiary',
                1 => 'outline-tertiary',
              ),
              13 => 
              array (
                0 => 'outline-quaternary',
                1 => 'outline-quaternary',
              ),
              14 => 
              array (
                0 => 'outline-success',
                1 => 'outline-success',
              ),
              15 => 
              array (
                0 => 'outline-info',
                1 => 'outline-info',
              ),
              16 => 
              array (
                0 => 'outline-warning',
                1 => 'outline-warning',
              ),
              17 => 
              array (
                0 => 'outline-danger',
                1 => 'outline-danger',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_carousel_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item',
        'type' => 'item_type',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_column' => 'item_type',
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-carousel-item',
          'header' => 'content-bootstrappackage-carousel-item-header',
          'call_to_action' => 'content-bootstrappackage-carousel-item-calltoaction',
          'image' => 'content-bootstrappackage-carousel-item-image',
          'text' => 'content-bootstrappackage-carousel-item-text',
          'text_and_image' => 'content-bootstrappackage-carousel-item-textandimage',
          'background_image' => 'content-bootstrappackage-carousel-item-backgroundimage',
          'html' => 'content-bootstrappackage-carousel-item-html',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                text_color,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'call_to_action' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                button_text,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'text_and_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header;header,
                nav_title,
                bodytext,
                text_color,
                image,
                link,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'background_image' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                background_color,
                background_image,
                background_image_options,
                link,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
        'html' => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.html_formlabel,
                nav_title,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
                --div--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tabs.background,
                background_color,
                background_image,
                background_image_options,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'bodytext' => 
            array (
              'config' => 
              array (
                'renderType' => 't3editor',
                'wrap' => 'off',
                'format' => 'html',
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'header' => 
        array (
          'showitem' => '
                header,
                header_layout,
                header_class,
                --linebreak--,
                subheader,
                subheader_layout,
                subheader_class,
                --linebreak--,
                header_position,
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content,
                item_type;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:CType_formlabel,
                --linebreak--,
                layout,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType} IN (\'carousel\',\'carousel_small\',\'carousel_fullscreen\')',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'item_type' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.header',
                1 => 'header',
                2 => 'content-bootstrappackage-carousel-item-header',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.text',
                1 => 'text',
                2 => 'content-bootstrappackage-carousel-item-text',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.calltoaction',
                1 => 'call_to_action',
                2 => 'content-bootstrappackage-carousel-item-calltoaction',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.image',
                1 => 'image',
                2 => 'content-bootstrappackage-carousel-item-image',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.textandimage',
                1 => 'text_and_image',
                2 => 'content-bootstrappackage-carousel-item-textandimage',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.backgroundimage',
                1 => 'background_image',
                2 => 'content-bootstrappackage-carousel-item-backgroundimage',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.item_type.html',
                1 => 'html',
                2 => 'content-bootstrappackage-carousel-item-html',
              ),
            ),
            'default' => 'header',
            'authMode' => 'explicitAllow',
            'authMode_enforce' => 'strict',
          ),
          'l10n_mode' => 'exclude',
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_carousel_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_carousel_item.pid=###CURRENT_PID### AND tx_bootstrappackage_carousel_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'layout' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.layout',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'custom',
                1 => 'custom',
              ),
              1 => 
              array (
                0 => 'primary',
                1 => 'primary',
              ),
              2 => 
              array (
                0 => 'secondary',
                1 => 'secondary',
              ),
              3 => 
              array (
                0 => 'tertiary',
                1 => 'tertiary',
              ),
              4 => 
              array (
                0 => 'quaternary',
                1 => 'quaternary',
              ),
              5 => 
              array (
                0 => 'light',
                1 => 'light',
              ),
              6 => 
              array (
                0 => 'dark',
                1 => 'dark',
              ),
            ),
            'default' => 'secondary',
          ),
          'l10n_mode' => 'exclude',
        ),
        'link' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'header_layout' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'H1',
                1 => '1',
              ),
              1 => 
              array (
                0 => 'H2',
                1 => '2',
              ),
              2 => 
              array (
                0 => 'H3',
                1 => '3',
              ),
              3 => 
              array (
                0 => 'H4',
                1 => '4',
              ),
            ),
            'default' => '1',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header_position' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position',
          'exclude' => true,
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.default',
                1 => '',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.center',
                1 => 'center',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.right',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_position.left',
                1 => 'left',
              ),
            ),
            'default' => '',
          ),
        ),
        'header_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.header_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'h1',
                1 => 'h1',
              ),
              2 => 
              array (
                0 => 'h2',
                1 => 'h2',
              ),
              3 => 
              array (
                0 => 'h3',
                1 => 'h3',
              ),
              4 => 
              array (
                0 => 'h4',
                1 => 'h4',
              ),
              5 => 
              array (
                0 => 'h5',
                1 => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'subheader_layout' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_layout',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'H2',
                1 => '2',
              ),
              1 => 
              array (
                0 => 'H3',
                1 => '3',
              ),
              2 => 
              array (
                0 => 'H4',
                1 => '4',
              ),
            ),
            'default' => '2',
          ),
          'l10n_mode' => 'exclude',
        ),
        'subheader_class' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.subheader_class',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 'none',
              ),
              1 => 
              array (
                0 => 'h1',
                1 => 'h1',
              ),
              2 => 
              array (
                0 => 'h2',
                1 => 'h2',
              ),
              3 => 
              array (
                0 => 'h3',
                1 => 'h3',
              ),
              4 => 
              array (
                0 => 'h4',
                1 => 'h4',
              ),
              5 => 
              array (
                0 => 'h5',
                1 => 'h5',
              ),
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        'nav_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.nav_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '5',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'button_text' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.button_text',
          'config' => 
          array (
            'type' => 'input',
            'size' => 20,
            'max' => 255,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        'text_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.text_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#FFFFFF',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_color' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_color',
          'displayCond' => 'FIELD:layout:=:custom',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'colorpicker',
            'default' => '#333333',
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:carousel_item.background_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'background_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
                'crop' => 
                array (
                  'config' => 
                  array (
                    'cropVariants' => 
                    array (
                      'default' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'xlarge' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'large' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'medium' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'small' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                      'extrasmall' => 
                      array (
                        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                        'allowedAspectRatios' => 
                        array (
                          '16:9' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                            'value' => 1.7777777777777777,
                          ),
                          '4:3' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                            'value' => 1.3333333333333333,
                          ),
                          '1:1' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                            'value' => 1.0,
                          ),
                          'NaN' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                            'value' => 0.0,
                          ),
                        ),
                        'selectedRatio' => 'NaN',
                        'cropArea' => 
                        array (
                          'x' => 0.0,
                          'y' => 0.0,
                          'width' => 1.0,
                          'height' => 1.0,
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
          'l10n_mode' => 'exclude',
        ),
        'background_image_options' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:field.background_image_options',
          'config' => 
          array (
            'type' => 'flex',
            'ds' => 
            array (
              'default' => 'FILE:EXT:bootstrap_package/Configuration/FlexForms/BackgroundImage.xml',
            ),
          ),
          'l10n_mode' => 'exclude',
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_icon_group_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-icon-group-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                subheader,
                bodytext,
                link,
                icon_set,
                icon_identifier,
                icon_file,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'icon_group\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_icon_group_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_icon_group_item.pid=###CURRENT_PID### AND tx_bootstrappackage_icon_group_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'subheader' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.subheader',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'link' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputLink',
            'size' => 50,
            'max' => 1024,
            'eval' => 'trim',
            'fieldControl' => 
            array (
              'linkPopup' => 
              array (
                'options' => 
                array (
                  'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.link',
                ),
              ),
            ),
            'softref' => 'typolink',
          ),
          'l10n_mode' => 'exclude',
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:icon_group_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_tab_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_alt' => 'bodytext',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-tab-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                header,
                bodytext,
                media,
                --palette--;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaposition;mediaposition,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'media' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'mediaposition' => 
        array (
          'showitem' => '
                mediaorient,
                imagecols,
                image_zoom,
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'tab\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_tab_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_tab_item.pid=###CURRENT_PID### AND tx_bootstrappackage_tab_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'media' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.media',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'media',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.audioOverlayPalette;audioOverlayPalette,
                                    --palette--;;filePalette',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.videoOverlayPalette;videoOverlayPalette,
                                    --palette--;;filePalette',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;LLL:EXT:lang/Resources/Private/Language/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                                    --palette--;;filePalette',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,bmp,png,pdf,svg,ai,mp3,wav,mp4,ogg,flac,opus,webm,youtube,vimeo',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
          ),
        ),
        'mediaorient' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.left',
                1 => 'left',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.top',
                1 => 'top',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.right',
                1 => 'right',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.mediaorient.bottom',
                1 => 'bottom',
              ),
            ),
            'default' => 'left',
          ),
          'l10n_mode' => 'exclude',
        ),
        'imagecols' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.imagecols',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '1',
                1 => 1,
              ),
              1 => 
              array (
                0 => '2',
                1 => 2,
              ),
              2 => 
              array (
                0 => '3',
                1 => 3,
              ),
              3 => 
              array (
                0 => '4',
                1 => 4,
              ),
              4 => 
              array (
                0 => '5',
                1 => 5,
              ),
              5 => 
              array (
                0 => '6',
                1 => 6,
              ),
            ),
            'default' => 2,
          ),
          'l10n_mode' => 'exclude',
        ),
        'image_zoom' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:tab_item.image_zoom',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
              ),
            ),
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bootstrappackage_timeline_item' => 
    array (
      'ctrl' => 
      array (
        'label' => 'header',
        'label_userFunc' => 'BK2K\\BootstrapPackage\\Userfuncs\\Tca->timelineItemLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideTable' => true,
        'hideAtCopy' => true,
        'prependAtCopy' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'default_sortby' => 'date',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'typeicon_classes' => 
        array (
          'default' => 'content-bootstrappackage-timeline-item',
        ),
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
                date,
                header,
                bodytext,
                icon_set,
                icon_identifier,
                icon_file,
                image,
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
                --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
                --palette--;;hiddenLanguagePalette,
            ',
          'columnsOverrides' => 
          array (
            'image' => 
            array (
              'config' => 
              array (
                'overrideChildTca' => 
                array (
                  'columns' => 
                  array (
                    'crop' => 
                    array (
                      'config' => 
                      array (
                        'cropVariants' => 
                        array (
                          'default' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.default',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'xlarge' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.xlarge',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'large' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.large',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'medium' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.medium',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'small' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.small',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                          'extrasmall' => 
                          array (
                            'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:option.extrasmall',
                            'allowedAspectRatios' => 
                            array (
                              '16:9' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.16_9',
                                'value' => 1.7777777777777777,
                              ),
                              '4:3' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.4_3',
                                'value' => 1.3333333333333333,
                              ),
                              '1:1' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.1_1',
                                'value' => 1.0,
                              ),
                              'NaN' => 
                              array (
                                'title' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:ratio.free',
                                'value' => 0.0,
                              ),
                            ),
                            'selectedRatio' => 'NaN',
                            'cropArea' => 
                            array (
                              'x' => 0.0,
                              'y' => 0.0,
                              'width' => 1.0,
                              'height' => 1.0,
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        1 => 
        array (
          'showitem' => '',
        ),
        'access' => 
        array (
          'showitem' => '
                starttime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:starttime_formlabel,
                endtime;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:endtime_formlabel
            ',
        ),
        'general' => 
        array (
          'showitem' => '
                tt_content
            ',
        ),
        'visibility' => 
        array (
          'showitem' => '
                hidden;LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item
            ',
        ),
        'hiddenLanguagePalette' => 
        array (
          'showitem' => 'sys_language_uid, l10n_parent',
          'isHiddenPalette' => true,
        ),
      ),
      'columns' => 
      array (
        'tt_content' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.tt_content',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'foreign_table' => 'tt_content',
            'foreign_table_where' => 'AND tt_content.pid=###CURRENT_PID### AND tt_content.{#CType}=\'timeline\'',
            'maxitems' => 1,
            'default' => 0,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              1 => 
              array (
                0 => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:hidden.I.0',
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
          ),
          'l10n_mode' => 'exclude',
          'l10n_display' => 'defaultAsReadonly',
        ),
        'sys_language_uid' => 
        array (
          'exclude' => 1,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bootstrappackage_timeline_item',
            'foreign_table_where' => 'AND tx_bootstrappackage_timeline_item.pid=###CURRENT_PID### AND tx_bootstrappackage_timeline_item.sys_language_uid IN (-1,0)',
            'default' => 0,
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.date',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'dbType' => 'datetime',
            'eval' => 'datetime,required',
          ),
          'l10n_mode' => 'exclude',
        ),
        'header' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.header',
          'config' => 
          array (
            'type' => 'input',
            'size' => 50,
            'eval' => 'trim,required',
          ),
        ),
        'bodytext' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.bodytext',
          'l10n_mode' => 'prefixLangTitle',
          'l10n_cat' => 'text',
          'config' => 
          array (
            'type' => 'text',
            'cols' => '80',
            'rows' => '15',
            'softref' => 'typolink_tag,email[subst],url',
            'enableRichtext' => true,
          ),
        ),
        'icon_set' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_set',
          'onChange' => 'reload',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconSetItems',
          ),
        ),
        'icon_identifier' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_identifier',
          'displayCond' => 'FIELD:icon_set:REQ:true',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'itemsProcFunc' => 'BK2K\\BootstrapPackage\\Service\\IconService->getIconItems',
            'itemsProcConfig' => 
            array (
              'iconSetField' => 'icon_set',
            ),
            'fieldWizard' => 
            array (
              'selectIcons' => 
              array (
                'renderType' => 'iconWizard',
                'disabled' => false,
              ),
            ),
          ),
        ),
        'icon_file' => 
        array (
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.icon_file',
          'displayCond' => 'FIELD:icon_set:REQ:false',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'icon_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,png,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,png,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'maxitems' => 1,
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bootstrap_package/Resources/Private/Language/Backend.xlf:timeline_item.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
              'types' => 
              array (
                0 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                1 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                2 => 
                array (
                  'showitem' => '
                                    title,
                                    alternative,
                                    description,
                                    crop,
                                    --palette--;;filePalette
                                ',
                ),
                3 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                4 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
                5 => 
                array (
                  'showitem' => '
                                    --palette--;;filePalette
                                ',
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'minitems' => 0,
            'maxitems' => 1,
          ),
        ),
        't3_origuid' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
            'default' => 0,
          ),
        ),
      ),
    ),
    'tx_bwjobs_domain_model_category' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_category',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,type',
        'iconfile' => 'EXT:bw_jobs/Resources/Public/Icons/tx_bwjobs_domain_model_category.jpg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                title,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                starttime,
                endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bwjobs_domain_model_category',
            'foreign_table_where' => 'AND {#tx_bwjobs_domain_model_category}.{#pid}=###CURRENT_PID### AND {#tx_bwjobs_domain_model_category}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_category.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim,uniqueInPid',
            'default' => '',
          ),
        ),
      ),
    ),
    'tx_bwjobs_domain_model_contactperson' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,gender,name,email,phone,fax,address',
        'iconfile' => 'EXT:bw_jobs/Resources/Public/Icons/tx_bwjobs_domain_model_contactperson.jpg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                title,
                gender,
                name,
                email,
                phone,
                fax,
                address,
                image,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                starttime,
                endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bwjobs_domain_model_contactperson',
            'foreign_table_where' => 'AND {#tx_bwjobs_domain_model_contactperson}.{#pid}=###CURRENT_PID### AND {#tx_bwjobs_domain_model_contactperson}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim,uniqueInPid',
            'default' => '',
          ),
        ),
        'gender' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.gender',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.gender_male',
                1 => 'MALE',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.gender_female',
                1 => 'FEMALE',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.gender_other',
                1 => 'OTHER',
              ),
            ),
            'eval' => 'required',
          ),
        ),
        'name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.name',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim',
            'default' => '',
          ),
        ),
        'email' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.email',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'nospace,email,trim',
            'default' => '',
          ),
        ),
        'phone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.phone',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'fax' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.fax',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'address' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.address',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_contactperson.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bwjobs_domain_model_contactperson',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_types' => 
            array (
              0 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              1 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              2 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              3 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              4 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              5 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
      ),
    ),
    'tx_bwjobs_domain_model_employmenttype' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,description,type',
        'iconfile' => 'EXT:bw_jobs/Resources/Public/Icons/tx_bwjobs_domain_model_employmenttype.jpg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                title,
                description,
                type,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                starttime,
                endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bwjobs_domain_model_employmenttype',
            'foreign_table_where' => 'AND {#tx_bwjobs_domain_model_employmenttype}.{#pid}=###CURRENT_PID### AND {#tx_bwjobs_domain_model_employmenttype}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim,uniqueInPid',
            'default' => '',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'type' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_full_time',
                1 => 'FULL_TIME',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_part_time',
                1 => 'PART_TIME',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_contractor',
                1 => 'CONTRACTOR',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_intern',
                1 => 'INTERN',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_volunteer',
                1 => 'VOLUNTEER',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_per_diem',
                1 => 'PER_DIEM',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_temporary',
                1 => 'TEMPORARY',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_employmenttype.type_other',
                1 => 'OTHER',
              ),
            ),
            'eval' => 'required',
          ),
        ),
      ),
    ),
    'tx_bwjobs_domain_model_jobposition' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,slug,teaser,description,required_education,required_experience,required_qualifications,required_responsibilities,required_skills,required_commitments,benefits,currency,payment_cycle,level',
        'iconfile' => 'EXT:bw_jobs/Resources/Public/Icons/tx_bwjobs_domain_model_jobposition.jpg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                title,
                slug,
                teaser,
                description,
                --palette--;;possibilities,
                level,
                --palette--;;dates,
                locations,
                categories,

                --div--;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_tabs.xlf:employment,
                work_hours,
                employment_types,

                --div--;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_tabs.xlf:pay,
                salary,
                currency,
                payment_cycle,

                --div--;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_tabs.xlf:requirements,
                education_categories,
                required_education,
                required_experience,
                required_qualifications,
                required_responsibilities,
                required_skills,
                required_commitments,
                benefits,

                --div--;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_tabs.xlf:seo,
                seo_title,
                seo_description,
                og_title,
                og_description,
                og_image,
                twitter_title,
                twitter_description,
                twitter_image,
                twitter_card,

                --div--;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_tabs.xlf:visibility,
                homeoffice_public,
                salary_public,
                employment_types_public,
                categories_public,
                headlines_visible,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                starttime,
                endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bwjobs_domain_model_jobposition',
            'foreign_table_where' => 'AND {#tx_bwjobs_domain_model_jobposition}.{#pid}=###CURRENT_PID### AND {#tx_bwjobs_domain_model_jobposition}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim,uniqueInPid',
            'default' => '',
          ),
        ),
        'slug' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.slug',
          'config' => 
          array (
            'type' => 'slug',
            'generatorOptions' => 
            array (
              'fields' => 
              array (
                0 => 'title',
              ),
              'fieldSeparator' => '/',
              'prefixParentPageSlug' => true,
            ),
            'fallbackCharacter' => '-',
            'eval' => 'uniqueInSite',
            'default' => '',
          ),
        ),
        'teaser' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.teaser',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'education_categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.education_categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectCheckBox',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.education_categories_high_school',
                1 => 'high school',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.education_categories_associate',
                1 => 'associate degree',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.education_categories_bachelor',
                1 => 'bachelor degree',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.education_categories_postgraduate',
                1 => 'postgraduate degree',
              ),
            ),
            'default' => '',
          ),
        ),
        'required_education' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_education',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'required_experience' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_experience',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'required_qualifications' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_qualifications',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'required_responsibilities' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_responsibilities',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'required_skills' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_skills',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'required_commitments' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.required_commitments',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'benefits' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.benefits',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'work_hours' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.work_hours',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'default' => 40,
            'range' => 
            array (
              'lower' => 0,
              'upper' => 48,
            ),
          ),
        ),
        'start_date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.start_date',
          'config' => 
          array (
            'dbType' => 'date',
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 7,
            'eval' => 'required,date',
            'default' => 1691824897,
          ),
        ),
        'valid_through_date' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.valid_through_date',
          'config' => 
          array (
            'dbType' => 'date',
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 7,
            'eval' => 'date',
            'default' => NULL,
          ),
        ),
        'salary_public' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.salary_public',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.salary_public_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.salary_public_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'salary' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.salary',
          'config' => 
          array (
            'type' => 'input',
            'size' => 4,
            'eval' => 'int',
            'range' => 
            array (
              'lower' => 0,
            ),
            'default' => 0,
          ),
        ),
        'homeoffice_public' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_public',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_public_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_public_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'homeoffice_possible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_possible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_possible_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_possible_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'direct_application_possible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.direct_application_possible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.direct_application_possible_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.direct_application_possible_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'currency' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_afa',
                1 => 'AFA',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_all',
                1 => 'ALL',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_dzd',
                1 => 'DZD',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_aoa',
                1 => 'AOA',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ars',
                1 => 'ARS',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_amd',
                1 => 'AMD',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_awg',
                1 => 'AWG',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_aud',
                1 => 'AUD',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_azn',
                1 => 'AZN',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bsd',
                1 => 'BSD',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bhd',
                1 => 'BHD',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bdt',
                1 => 'BDT',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bbd',
                1 => 'BBD',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_byr',
                1 => 'BYR',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bef',
                1 => 'BEF',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bzd',
                1 => 'BZD',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bmd',
                1 => 'BMD',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_btn',
                1 => 'BTN',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_btc',
                1 => 'BTC',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bob',
                1 => 'BOB',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bam',
                1 => 'BAM',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bwp',
                1 => 'BWP',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_brl',
                1 => 'BRL',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gbp',
                1 => 'GBP',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bnd',
                1 => 'BND',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bgn',
                1 => 'BGN',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_bif',
                1 => 'BIF',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_khr',
                1 => 'KHR',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cad',
                1 => 'CAD',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cve',
                1 => 'CVE',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kyd',
                1 => 'KYD',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_xof',
                1 => 'XOF',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_xaf',
                1 => 'XAF',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_xpf',
                1 => 'XPF',
              ),
              34 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_clp',
                1 => 'CLP',
              ),
              35 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cny',
                1 => 'CNY',
              ),
              36 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cop',
                1 => 'COP',
              ),
              37 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kmf',
                1 => 'KMF',
              ),
              38 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cdf',
                1 => 'CDF',
              ),
              39 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_crc',
                1 => 'CRC',
              ),
              40 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_hrk',
                1 => 'HRK',
              ),
              41 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_cuc',
                1 => 'CUC',
              ),
              42 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_czk',
                1 => 'CZK',
              ),
              43 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_dkk',
                1 => 'DKK',
              ),
              44 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_djf',
                1 => 'DJF',
              ),
              45 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_dop',
                1 => 'DOP',
              ),
              46 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_xcd',
                1 => 'XCD',
              ),
              47 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_egp',
                1 => 'EGP',
              ),
              48 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ern',
                1 => 'ERN',
              ),
              49 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_eek',
                1 => 'EEK',
              ),
              50 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_etb',
                1 => 'ETB',
              ),
              51 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_eur',
                1 => 'EUR',
              ),
              52 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_fkp',
                1 => 'FKP',
              ),
              53 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_fjd',
                1 => 'FJD',
              ),
              54 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gmd',
                1 => 'GMD',
              ),
              55 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gel',
                1 => 'GEL',
              ),
              56 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ghs',
                1 => 'GHS',
              ),
              57 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gip',
                1 => 'GIP',
              ),
              58 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_grd',
                1 => 'GRD',
              ),
              59 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gtq',
                1 => 'GTQ',
              ),
              60 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gnf',
                1 => 'GNF',
              ),
              61 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_gyd',
                1 => 'GYD',
              ),
              62 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_htg',
                1 => 'HTG',
              ),
              63 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_hnl',
                1 => 'HNL',
              ),
              64 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_hkd',
                1 => 'HKD',
              ),
              65 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_huf',
                1 => 'HUF',
              ),
              66 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_isk',
                1 => 'ISK',
              ),
              67 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_inr',
                1 => 'INR',
              ),
              68 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_idr',
                1 => 'IDR',
              ),
              69 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_irr',
                1 => 'IRR',
              ),
              70 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_iqd',
                1 => 'IQD',
              ),
              71 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ils',
                1 => 'ILS',
              ),
              72 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_itl',
                1 => 'ITL',
              ),
              73 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_jmd',
                1 => 'JMD',
              ),
              74 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_jpy',
                1 => 'JPY',
              ),
              75 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_jod',
                1 => 'JOD',
              ),
              76 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kzt',
                1 => 'KZT',
              ),
              77 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kes',
                1 => 'KES',
              ),
              78 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kwd',
                1 => 'KWD',
              ),
              79 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kgs',
                1 => 'KGS',
              ),
              80 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lak',
                1 => 'LAK',
              ),
              81 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lvl',
                1 => 'LVL',
              ),
              82 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lbp',
                1 => 'LBP',
              ),
              83 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lsl',
                1 => 'LSL',
              ),
              84 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lrd',
                1 => 'LRD',
              ),
              85 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lyd',
                1 => 'LYD',
              ),
              86 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ltl',
                1 => 'LTL',
              ),
              87 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mop',
                1 => 'MOP',
              ),
              88 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mkd',
                1 => 'MKD',
              ),
              89 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mga',
                1 => 'MGA',
              ),
              90 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mwk',
                1 => 'MWK',
              ),
              91 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_myr',
                1 => 'MYR',
              ),
              92 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mvr',
                1 => 'MVR',
              ),
              93 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mro',
                1 => 'MRO',
              ),
              94 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mur',
                1 => 'MUR',
              ),
              95 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mxn',
                1 => 'MXN',
              ),
              96 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mdl',
                1 => 'MDL',
              ),
              97 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mnt',
                1 => 'MNT',
              ),
              98 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mad',
                1 => 'MAD',
              ),
              99 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mzm',
                1 => 'MZM',
              ),
              100 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_mmk',
                1 => 'MMK',
              ),
              101 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_nad',
                1 => 'NAD',
              ),
              102 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_npr',
                1 => 'NPR',
              ),
              103 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ang',
                1 => 'ANG',
              ),
              104 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_twd',
                1 => 'TWD',
              ),
              105 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_nzd',
                1 => 'NZD',
              ),
              106 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_nio',
                1 => 'NIO',
              ),
              107 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ngn',
                1 => 'NGN',
              ),
              108 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_kpw',
                1 => 'KPW',
              ),
              109 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_nok',
                1 => 'NOK',
              ),
              110 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_omr',
                1 => 'OMR',
              ),
              111 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pkr',
                1 => 'PKR',
              ),
              112 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pab',
                1 => 'PAB',
              ),
              113 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pgk',
                1 => 'PGK',
              ),
              114 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pyg',
                1 => 'PYG',
              ),
              115 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pen',
                1 => 'PEN',
              ),
              116 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_php',
                1 => 'PHP',
              ),
              117 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_pln',
                1 => 'PLN',
              ),
              118 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_qar',
                1 => 'QAR',
              ),
              119 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ron',
                1 => 'RON',
              ),
              120 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_rub',
                1 => 'RUB',
              ),
              121 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_rwf',
                1 => 'RWF',
              ),
              122 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_svc',
                1 => 'SVC',
              ),
              123 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_wst',
                1 => 'WST',
              ),
              124 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sar',
                1 => 'SAR',
              ),
              125 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_rsd',
                1 => 'RSD',
              ),
              126 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_scr',
                1 => 'SCR',
              ),
              127 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sll',
                1 => 'SLL',
              ),
              128 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sgd',
                1 => 'SGD',
              ),
              129 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_skk',
                1 => 'SKK',
              ),
              130 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sbd',
                1 => 'SBD',
              ),
              131 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sos',
                1 => 'SOS',
              ),
              132 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_zar',
                1 => 'ZAR',
              ),
              133 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_krw',
                1 => 'KRW',
              ),
              134 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_xdr',
                1 => 'XDR',
              ),
              135 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_lkr',
                1 => 'LKR',
              ),
              136 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_shp',
                1 => 'SHP',
              ),
              137 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sdg',
                1 => 'SDG',
              ),
              138 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_srd',
                1 => 'SRD',
              ),
              139 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_szl',
                1 => 'SZL',
              ),
              140 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_sek',
                1 => 'SEK',
              ),
              141 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_chf',
                1 => 'CHF',
              ),
              142 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_syp',
                1 => 'SYP',
              ),
              143 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_std',
                1 => 'STD',
              ),
              144 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_tjs',
                1 => 'TJS',
              ),
              145 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_tzs',
                1 => 'TZS',
              ),
              146 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_thb',
                1 => 'THB',
              ),
              147 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_top',
                1 => 'TOP',
              ),
              148 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ttd',
                1 => 'TTD',
              ),
              149 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_tnd',
                1 => 'TND',
              ),
              150 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_try',
                1 => 'TRY',
              ),
              151 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_tmt',
                1 => 'TMT',
              ),
              152 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_ugx',
                1 => 'UGX',
              ),
              153 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_uah',
                1 => 'UAH',
              ),
              154 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_aed',
                1 => 'AED',
              ),
              155 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_uyu',
                1 => 'UYU',
              ),
              156 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_usd',
                1 => 'USD',
              ),
              157 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_uzs',
                1 => 'UZS',
              ),
              158 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_vuv',
                1 => 'VUV',
              ),
              159 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_vef',
                1 => 'VEF',
              ),
              160 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_vnd',
                1 => 'VND',
              ),
              161 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_yer',
                1 => 'YER',
              ),
              162 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.currency_zmk',
                1 => 'ZMK',
              ),
            ),
            'default' => 'EUR',
            'eval' => 'required',
          ),
        ),
        'payment_cycle' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.payment_cycle',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.payment_cycle_hourly',
                1 => 'HOURLY',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.payment_cycle_daily',
                1 => 'DAILY',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.payment_cycle_monthly',
                1 => 'MONTHLY',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.payment_cycle_yearly',
                1 => 'YEARLY',
              ),
            ),
            'default' => 'MONTHLY',
            'eval' => 'required',
          ),
        ),
        'level' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.level',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.level_junior',
                1 => 'JUNIOR',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.level_senior',
                1 => 'SENIOR',
              ),
            ),
            'eval' => 'required',
          ),
        ),
        'date_posted' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.date_posted',
          'config' => 
          array (
            'dbType' => 'date',
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'size' => 7,
            'eval' => 'required,date',
            'default' => 1691824897,
          ),
        ),
        'seo_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.seo_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'seo_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.seo_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.og_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'og_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.og_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'og_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.og_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'og_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_types' => 
            array (
              0 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              1 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              2 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              3 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              4 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              5 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'twitter_title' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.twitter_title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 40,
            'max' => 255,
            'eval' => 'trim',
          ),
        ),
        'twitter_description' => 
        array (
          'exclude' => true,
          'l10n_mode' => 'prefixLangTitle',
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.twitter_description',
          'config' => 
          array (
            'type' => 'text',
            'cols' => 40,
            'rows' => 3,
          ),
        ),
        'twitter_image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.twitter_image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'twitter_image',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_types' => 
            array (
              0 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              1 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              2 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              3 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              4 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              5 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'twitter_card' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.twitter_card',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'summary',
                1 => 'summary',
              ),
              1 => 
              array (
                0 => 'summary_large_image',
                1 => 'summary_large_image',
              ),
            ),
            'eval' => 'required',
          ),
        ),
        'employment_types_public' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.employment_types_public',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.employment_types_public_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.employment_types_public_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'employment_types' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.employment_types',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_bwjobs_domain_model_employmenttype',
            'foreign_table_where' => ' AND tx_bwjobs_domain_model_employmenttype.sys_language_uid = ###REC_FIELD_sys_language_uid###',
            'MM' => 'tx_bwjobs_jobposition_employmenttype_mm',
            'size' => 10,
            'autoSizeMax' => 30,
            'minitems' => 1,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'locations' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.locations',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_bwjobs_domain_model_location',
            'foreign_table_where' => ' AND tx_bwjobs_domain_model_location.sys_language_uid = ###REC_FIELD_sys_language_uid###',
            'MM' => 'tx_bwjobs_jobposition_location_mm',
            'size' => 10,
            'autoSizeMax' => 30,
            'minitems' => 1,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'categories_public' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.categories_public',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.categories_public_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.categories_public_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.categories',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_bwjobs_domain_model_category',
            'foreign_table_where' => ' AND tx_bwjobs_domain_model_category.sys_language_uid = ###REC_FIELD_sys_language_uid###',
            'MM' => 'tx_bwjobs_jobposition_category_mm',
            'size' => 10,
            'autoSizeMax' => 30,
            'minitems' => 0,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
        'headlines_visible' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.headlines_visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxLabeledToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'labelUnchecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.headlines_visible_no',
                'labelChecked' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.headlines_visible_yes',
              ),
            ),
            'default' => 0,
          ),
        ),
      ),
      'palettes' => 
      array (
        'dates' => 
        array (
          'showitem' => '
                start_date;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.start_date,
                date_posted;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.date_posted,
                valid_through_date;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.valid_through_date
            ',
        ),
        'possibilities' => 
        array (
          'showitem' => '
                homeoffice_possible;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.homeoffice_possible,
                direct_application_possible;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_jobposition.direct_application_possible
            ',
        ),
      ),
    ),
    'tx_bwjobs_domain_model_location' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,organization,description,street,city,zip,country,country_zone',
        'iconfile' => 'EXT:bw_jobs/Resources/Public/Icons/tx_bwjobs_domain_model_location.jpg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '
                title,
                organization,
                description,
                street,
                zip,
                --palette--;;city,
                --palette--;;country,
                image,
                contact_persons,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                sys_language_uid,
                l10n_parent,
                l10n_diffsource,

                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                hidden,
                starttime,
                endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_bwjobs_domain_model_location',
            'foreign_table_where' => 'AND {#tx_bwjobs_domain_model_location}.{#pid}=###CURRENT_PID### AND {#tx_bwjobs_domain_model_location}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.title',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim,uniqueInPid',
            'default' => '',
          ),
        ),
        'organization' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.organization',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'richtextConfiguration' => 'default',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'default' => '',
          ),
        ),
        'street' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.street',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim',
            'default' => '',
          ),
        ),
        'city' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.city',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim',
            'default' => '',
          ),
        ),
        'zip' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.zip',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim',
            'default' => '',
          ),
        ),
        'region' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_bw',
                1 => 'DE-BW',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_by',
                1 => 'DE-BY',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_be',
                1 => 'DE-BE',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_bb',
                1 => 'DE-BB',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_hb',
                1 => 'DE-HB',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_hh',
                1 => 'DE-HH',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_he',
                1 => 'DE-HE',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_mv',
                1 => 'DE-MV',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_ni',
                1 => 'DE-NI',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_nw',
                1 => 'DE-NW',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_rp',
                1 => 'DE-RP',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_sl',
                1 => 'DE-SL',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_sn',
                1 => 'DE-SN',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_st',
                1 => 'DE-ST',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_sh',
                1 => 'DE-SH',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region_th',
                1 => 'DE-TH',
              ),
            ),
            'default' => '',
            'maxitems' => 1,
            'eval' => 'required',
          ),
          'displayCond' => 'FIELD:country_zone:=:DE',
        ),
        'country' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'required,trim',
            'default' => '',
          ),
        ),
        'country_zone' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_af',
                1 => 'AF',
              ),
              1 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_al',
                1 => 'AL',
              ),
              2 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_dz',
                1 => 'DZ',
              ),
              3 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_as',
                1 => 'AS',
              ),
              4 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ad',
                1 => 'AD',
              ),
              5 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ao',
                1 => 'AO',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ai',
                1 => 'AI',
              ),
              7 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_aq',
                1 => 'AQ',
              ),
              8 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ag',
                1 => 'AG',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ar',
                1 => 'AR',
              ),
              10 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_am',
                1 => 'AM',
              ),
              11 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_aw',
                1 => 'AW',
              ),
              12 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_au',
                1 => 'AU',
              ),
              13 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_at',
                1 => 'AT',
              ),
              14 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_az',
                1 => 'AZ',
              ),
              15 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bs',
                1 => 'BS',
              ),
              16 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bh',
                1 => 'BH',
              ),
              17 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bd',
                1 => 'BD',
              ),
              18 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bb',
                1 => 'BB',
              ),
              19 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_by',
                1 => 'BY',
              ),
              20 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_be',
                1 => 'BE',
              ),
              21 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bz',
                1 => 'BZ',
              ),
              22 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bj',
                1 => 'BJ',
              ),
              23 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bm',
                1 => 'BM',
              ),
              24 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bt',
                1 => 'BT',
              ),
              25 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bo',
                1 => 'BO',
              ),
              26 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bq',
                1 => 'BQ',
              ),
              27 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ba',
                1 => 'BA',
              ),
              28 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bw',
                1 => 'BW',
              ),
              29 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bv',
                1 => 'BV',
              ),
              30 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_br',
                1 => 'BR',
              ),
              31 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_io',
                1 => 'IO',
              ),
              32 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bn',
                1 => 'BN',
              ),
              33 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bg',
                1 => 'BG',
              ),
              34 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bf',
                1 => 'BF',
              ),
              35 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bi',
                1 => 'BI',
              ),
              36 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cv',
                1 => 'CV',
              ),
              37 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kh',
                1 => 'KH',
              ),
              38 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cm',
                1 => 'CM',
              ),
              39 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ca',
                1 => 'CA',
              ),
              40 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ky',
                1 => 'KY',
              ),
              41 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cf',
                1 => 'CF',
              ),
              42 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_td',
                1 => 'TD',
              ),
              43 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cl',
                1 => 'CL',
              ),
              44 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cn',
                1 => 'CN',
              ),
              45 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cx',
                1 => 'CX',
              ),
              46 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cc',
                1 => 'CC',
              ),
              47 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_co',
                1 => 'CO',
              ),
              48 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_km',
                1 => 'KM',
              ),
              49 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cd',
                1 => 'CD',
              ),
              50 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cg',
                1 => 'CG',
              ),
              51 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ck',
                1 => 'CK',
              ),
              52 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cr',
                1 => 'CR',
              ),
              53 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_hr',
                1 => 'HR',
              ),
              54 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cu',
                1 => 'CU',
              ),
              55 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cw',
                1 => 'CW',
              ),
              56 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cy',
                1 => 'CY',
              ),
              57 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_cz',
                1 => 'CZ',
              ),
              58 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ci',
                1 => 'CI',
              ),
              59 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_dk',
                1 => 'DK',
              ),
              60 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_dj',
                1 => 'DJ',
              ),
              61 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_dm',
                1 => 'DM',
              ),
              62 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_do',
                1 => 'DO',
              ),
              63 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ec',
                1 => 'EC',
              ),
              64 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_eg',
                1 => 'EG',
              ),
              65 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sv',
                1 => 'SV',
              ),
              66 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gq',
                1 => 'GQ',
              ),
              67 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_er',
                1 => 'ER',
              ),
              68 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ee',
                1 => 'EE',
              ),
              69 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sz',
                1 => 'SZ',
              ),
              70 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_et',
                1 => 'ET',
              ),
              71 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fk',
                1 => 'FK',
              ),
              72 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fo',
                1 => 'FO',
              ),
              73 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fj',
                1 => 'FJ',
              ),
              74 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fi',
                1 => 'FI',
              ),
              75 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fr',
                1 => 'FR',
              ),
              76 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gf',
                1 => 'GF',
              ),
              77 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pf',
                1 => 'PF',
              ),
              78 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tf',
                1 => 'TF',
              ),
              79 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ga',
                1 => 'GA',
              ),
              80 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gm',
                1 => 'GM',
              ),
              81 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ge',
                1 => 'GE',
              ),
              82 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_de',
                1 => 'DE',
              ),
              83 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gh',
                1 => 'GH',
              ),
              84 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gi',
                1 => 'GI',
              ),
              85 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gr',
                1 => 'GR',
              ),
              86 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gl',
                1 => 'GL',
              ),
              87 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gd',
                1 => 'GD',
              ),
              88 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gp',
                1 => 'GP',
              ),
              89 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gu',
                1 => 'GU',
              ),
              90 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gt',
                1 => 'GT',
              ),
              91 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gg',
                1 => 'GG',
              ),
              92 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gn',
                1 => 'GN',
              ),
              93 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gw',
                1 => 'GW',
              ),
              94 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gy',
                1 => 'GY',
              ),
              95 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ht',
                1 => 'HT',
              ),
              96 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_hm',
                1 => 'HM',
              ),
              97 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_va',
                1 => 'VA',
              ),
              98 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_hn',
                1 => 'HN',
              ),
              99 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_hk',
                1 => 'HK',
              ),
              100 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_hu',
                1 => 'HU',
              ),
              101 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_is',
                1 => 'IS',
              ),
              102 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_in',
                1 => 'IN',
              ),
              103 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_id',
                1 => 'ID',
              ),
              104 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ir',
                1 => 'IR',
              ),
              105 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_iq',
                1 => 'IQ',
              ),
              106 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ie',
                1 => 'IE',
              ),
              107 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_im',
                1 => 'IM',
              ),
              108 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_il',
                1 => 'IL',
              ),
              109 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_it',
                1 => 'IT',
              ),
              110 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_jm',
                1 => 'JM',
              ),
              111 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_jp',
                1 => 'JP',
              ),
              112 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_je',
                1 => 'JE',
              ),
              113 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_jo',
                1 => 'JO',
              ),
              114 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kz',
                1 => 'KZ',
              ),
              115 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ke',
                1 => 'KE',
              ),
              116 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ki',
                1 => 'KI',
              ),
              117 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kp',
                1 => 'KP',
              ),
              118 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kr',
                1 => 'KR',
              ),
              119 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kw',
                1 => 'KW',
              ),
              120 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kg',
                1 => 'KG',
              ),
              121 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_la',
                1 => 'LA',
              ),
              122 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lv',
                1 => 'LV',
              ),
              123 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lb',
                1 => 'LB',
              ),
              124 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ls',
                1 => 'LS',
              ),
              125 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lr',
                1 => 'LR',
              ),
              126 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ly',
                1 => 'LY',
              ),
              127 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_li',
                1 => 'LI',
              ),
              128 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lt',
                1 => 'LT',
              ),
              129 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lu',
                1 => 'LU',
              ),
              130 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mo',
                1 => 'MO',
              ),
              131 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mg',
                1 => 'MG',
              ),
              132 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mw',
                1 => 'MW',
              ),
              133 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_my',
                1 => 'MY',
              ),
              134 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mv',
                1 => 'MV',
              ),
              135 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ml',
                1 => 'ML',
              ),
              136 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mt',
                1 => 'MT',
              ),
              137 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mh',
                1 => 'MH',
              ),
              138 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mq',
                1 => 'MQ',
              ),
              139 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mr',
                1 => 'MR',
              ),
              140 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mu',
                1 => 'MU',
              ),
              141 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_yt',
                1 => 'YT',
              ),
              142 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mx',
                1 => 'MX',
              ),
              143 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_fm',
                1 => 'FM',
              ),
              144 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_md',
                1 => 'MD',
              ),
              145 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mc',
                1 => 'MC',
              ),
              146 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mn',
                1 => 'MN',
              ),
              147 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_me',
                1 => 'ME',
              ),
              148 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ms',
                1 => 'MS',
              ),
              149 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ma',
                1 => 'MA',
              ),
              150 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mz',
                1 => 'MZ',
              ),
              151 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mm',
                1 => 'MM',
              ),
              152 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_na',
                1 => 'NA',
              ),
              153 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nr',
                1 => 'NR',
              ),
              154 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_np',
                1 => 'NP',
              ),
              155 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nl',
                1 => 'NL',
              ),
              156 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nc',
                1 => 'NC',
              ),
              157 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nz',
                1 => 'NZ',
              ),
              158 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ni',
                1 => 'NI',
              ),
              159 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ne',
                1 => 'NE',
              ),
              160 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ng',
                1 => 'NG',
              ),
              161 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nu',
                1 => 'NU',
              ),
              162 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_nf',
                1 => 'NF',
              ),
              163 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mp',
                1 => 'MP',
              ),
              164 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_no',
                1 => 'NO',
              ),
              165 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_om',
                1 => 'OM',
              ),
              166 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pk',
                1 => 'PK',
              ),
              167 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pw',
                1 => 'PW',
              ),
              168 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ps',
                1 => 'PS',
              ),
              169 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pa',
                1 => 'PA',
              ),
              170 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pg',
                1 => 'PG',
              ),
              171 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_py',
                1 => 'PY',
              ),
              172 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pe',
                1 => 'PE',
              ),
              173 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ph',
                1 => 'PH',
              ),
              174 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pn',
                1 => 'PN',
              ),
              175 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pl',
                1 => 'PL',
              ),
              176 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pt',
                1 => 'PT',
              ),
              177 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pr',
                1 => 'PR',
              ),
              178 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_qa',
                1 => 'QA',
              ),
              179 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mk',
                1 => 'MK',
              ),
              180 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ro',
                1 => 'RO',
              ),
              181 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ru',
                1 => 'RU',
              ),
              182 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_rw',
                1 => 'RW',
              ),
              183 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_re',
                1 => 'RE',
              ),
              184 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_bl',
                1 => 'BL',
              ),
              185 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sh',
                1 => 'SH',
              ),
              186 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_kn',
                1 => 'KN',
              ),
              187 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lc',
                1 => 'LC',
              ),
              188 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_mf',
                1 => 'MF',
              ),
              189 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_pm',
                1 => 'PM',
              ),
              190 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_vc',
                1 => 'VC',
              ),
              191 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ws',
                1 => 'WS',
              ),
              192 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sm',
                1 => 'SM',
              ),
              193 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_st',
                1 => 'ST',
              ),
              194 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sa',
                1 => 'SA',
              ),
              195 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sn',
                1 => 'SN',
              ),
              196 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_rs',
                1 => 'RS',
              ),
              197 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sc',
                1 => 'SC',
              ),
              198 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sl',
                1 => 'SL',
              ),
              199 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sg',
                1 => 'SG',
              ),
              200 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sx',
                1 => 'SX',
              ),
              201 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sk',
                1 => 'SK',
              ),
              202 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_si',
                1 => 'SI',
              ),
              203 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sb',
                1 => 'SB',
              ),
              204 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_so',
                1 => 'SO',
              ),
              205 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_za',
                1 => 'ZA',
              ),
              206 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gs',
                1 => 'GS',
              ),
              207 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ss',
                1 => 'SS',
              ),
              208 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_es',
                1 => 'ES',
              ),
              209 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_lk',
                1 => 'LK',
              ),
              210 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sd',
                1 => 'SD',
              ),
              211 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sr',
                1 => 'SR',
              ),
              212 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sj',
                1 => 'SJ',
              ),
              213 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_se',
                1 => 'SE',
              ),
              214 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ch',
                1 => 'CH',
              ),
              215 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_sy',
                1 => 'SY',
              ),
              216 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tw',
                1 => 'TW',
              ),
              217 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tj',
                1 => 'TJ',
              ),
              218 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tz',
                1 => 'TZ',
              ),
              219 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_th',
                1 => 'TH',
              ),
              220 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tl',
                1 => 'TL',
              ),
              221 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tg',
                1 => 'TG',
              ),
              222 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tk',
                1 => 'TK',
              ),
              223 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_to',
                1 => 'TO',
              ),
              224 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tt',
                1 => 'TT',
              ),
              225 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tn',
                1 => 'TN',
              ),
              226 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tr',
                1 => 'TR',
              ),
              227 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tm',
                1 => 'TM',
              ),
              228 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tc',
                1 => 'TC',
              ),
              229 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_tv',
                1 => 'TV',
              ),
              230 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ug',
                1 => 'UG',
              ),
              231 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ua',
                1 => 'UA',
              ),
              232 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ae',
                1 => 'AE',
              ),
              233 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_gb',
                1 => 'GB',
              ),
              234 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_um',
                1 => 'UM',
              ),
              235 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_us',
                1 => 'US',
              ),
              236 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_uy',
                1 => 'UY',
              ),
              237 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_uz',
                1 => 'UZ',
              ),
              238 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_vu',
                1 => 'VU',
              ),
              239 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ve',
                1 => 'VE',
              ),
              240 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_vn',
                1 => 'VN',
              ),
              241 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_vg',
                1 => 'VG',
              ),
              242 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_vi',
                1 => 'VI',
              ),
              243 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_wf',
                1 => 'WF',
              ),
              244 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_eh',
                1 => 'EH',
              ),
              245 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ye',
                1 => 'YE',
              ),
              246 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_zm',
                1 => 'ZM',
              ),
              247 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_zw',
                1 => 'ZW',
              ),
              248 => 
              array (
                0 => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone_ax',
                1 => 'AX',
              ),
            ),
            'eval' => 'required',
          ),
          'onChange' => 'reload',
        ),
        'image' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.image',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'sys_file_reference',
            'foreign_field' => 'uid_foreign',
            'foreign_sortby' => 'sorting_foreign',
            'foreign_table_field' => 'tablenames',
            'foreign_match_fields' => 
            array (
              'fieldname' => 'image',
              'tablenames' => 'tx_bwjobs_domain_model_location',
              'table_local' => 'sys_file',
            ),
            'foreign_label' => 'uid_local',
            'foreign_selector' => 'uid_local',
            'overrideChildTca' => 
            array (
              'columns' => 
              array (
                'uid_local' => 
                array (
                  'config' => 
                  array (
                    'appearance' => 
                    array (
                      'elementBrowserType' => 'file',
                      'elementBrowserAllowed' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                    ),
                  ),
                ),
              ),
            ),
            'filter' => 
            array (
              0 => 
              array (
                'userFunc' => 'TYPO3\\CMS\\Core\\Resource\\Filter\\FileExtensionFilter->filterInlineChildren',
                'parameters' => 
                array (
                  'allowedFileExtensions' => 'gif,jpg,jpeg,tif,tiff,bmp,pcx,tga,png,pdf,ai,svg',
                  'disallowedFileExtensions' => '',
                ),
              ),
            ),
            'appearance' => 
            array (
              'useSortable' => true,
              'headerThumbnail' => 
              array (
                'field' => 'uid_local',
                'height' => '45m',
              ),
              'enabledControls' => 
              array (
                'info' => true,
                'new' => false,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
              ),
              'createNewRelationLinkTitle' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:images.addFileReference',
            ),
            'foreign_types' => 
            array (
              0 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              1 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              2 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              3 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              4 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
              5 => 
              array (
                'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette',
              ),
            ),
            'maxitems' => 1,
          ),
        ),
        'contact_persons' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.contact_persons',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectMultipleSideBySide',
            'foreign_table' => 'tx_bwjobs_domain_model_contactperson',
            'foreign_table_where' => ' AND tx_bwjobs_domain_model_contactperson.sys_language_uid = ###REC_FIELD_sys_language_uid###',
            'MM' => 'tx_bwjobs_location_contactperson_mm',
            'size' => 10,
            'autoSizeMax' => 30,
            'maxitems' => 9999,
            'multiple' => 0,
            'fieldControl' => 
            array (
              'editPopup' => 
              array (
                'disabled' => false,
              ),
              'addRecord' => 
              array (
                'disabled' => false,
              ),
              'listModule' => 
              array (
                'disabled' => true,
              ),
            ),
          ),
        ),
      ),
      'palettes' => 
      array (
        'country' => 
        array (
          'showitem' => '
                country;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country,
                country_zone;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.country_zone
            ',
        ),
        'city' => 
        array (
          'showitem' => '
                city;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.city,
                region;LLL:EXT:bw_jobs/Resources/Private/Language/locallang_db.xlf:tx_bwjobs_domain_model_location.region
            ',
        ),
      ),
    ),
    'tx_wecookieconsent_domain_model_cookie' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie',
        'label' => 'title',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'title,regex,description,max_age',
        'iconfile' => 'EXT:we_cookie_consent/Resources/Public/Icons/tx_wecookieconsent_domain_model_cookie.svg',
        'hideTable' => true,
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => 'title, description, max_age, 
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.tab.advanced.label, regex, 
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, hidden, sys_language_uid, l10n_parent, l10n_diffsource, starttime, endtime
            ',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_wecookieconsent_domain_model_cookie',
            'foreign_table_where' => 'AND {#tx_wecookieconsent_domain_model_cookie}.{#pid}=###CURRENT_PID### AND {#tx_wecookieconsent_domain_model_cookie}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'range' => 
            array (
              'upper' => 2145916800,
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.title.label',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.description.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.description.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
          ),
        ),
        'max_age' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.max_age.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_cookie.max_age.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
          ),
        ),
        'service' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
      ),
    ),
    'tx_wecookieconsent_domain_model_service' => 
    array (
      'ctrl' => 
      array (
        'title' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service',
        'label' => 'provider',
        'label_alt' => 'title',
        'label_alt_force' => true,
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => 
        array (
          'disabled' => 'hidden',
          'starttime' => 'starttime',
          'endtime' => 'endtime',
        ),
        'searchFields' => 'provider,name,title,description,purpose,snippet,callback,domain,api_key,gtm_tag_title,gtm_trigger_title,gtm_trigger_name,gtm_variable_title,gtm_variable_name',
        'iconfile' => 'EXT:we_cookie_consent/Resources/Public/Icons/tx_wecookieconsent_domain_model_service.svg',
      ),
      'types' => 
      array (
        1 => 
        array (
          'showitem' => '--palette--;;service_provider, title, description,
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.tab.cookies.label, cookies, 
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.tab.settings.label, state, required, preselected, opt_out, only_once, contextual_consent_only, 
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.tab.identification.label, domain, api_key, 
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.tab.dev.label, snippet, callback, 
                --div--;LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.tab.gtm.label, gtm_tag_title, --palette--;;gtm_trigger, --palette--;;gtm_variable,  
                --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, hidden, sys_language_uid, l10n_parent, l10n_diffsource, starttime, endtime, --div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category, categories',
        ),
      ),
      'palettes' => 
      array (
        'service_provider' => 
        array (
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.palette.service_provider.label',
          'showitem' => 'provider, name',
        ),
        'gtm_trigger' => 
        array (
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.palette.gtm_trigger.label',
          'showitem' => 'gtm_trigger_title, gtm_trigger_name',
        ),
        'gtm_variable' => 
        array (
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.palette.gtm_variable.label',
          'showitem' => 'gtm_variable_title, gtm_variable_name',
        ),
      ),
      'columns' => 
      array (
        'sys_language_uid' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
          'config' => 
          array (
            'type' => 'language',
          ),
        ),
        'l10n_parent' => 
        array (
          'displayCond' => 'FIELD:sys_language_uid:>:0',
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'default' => 0,
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => 0,
              ),
            ),
            'foreign_table' => 'tx_wecookieconsent_domain_model_service',
            'foreign_table_where' => 'AND {#tx_wecookieconsent_domain_model_service}.{#pid}=###CURRENT_PID### AND {#tx_wecookieconsent_domain_model_service}.{#sys_language_uid} IN (-1,0)',
          ),
        ),
        'l10n_diffsource' => 
        array (
          'config' => 
          array (
            'type' => 'passthrough',
          ),
        ),
        't3ver_label' => 
        array (
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'max' => 255,
          ),
        ),
        'hidden' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
          'config' => 
          array (
            'type' => 'check',
            'renderType' => 'checkboxToggle',
            'items' => 
            array (
              0 => 
              array (
                0 => '',
                1 => '',
                'invertStateDisplay' => true,
              ),
            ),
          ),
        ),
        'starttime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'endtime' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
          'config' => 
          array (
            'type' => 'input',
            'renderType' => 'inputDateTime',
            'eval' => 'datetime,int',
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'provider' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.provider.label',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => 
            array (
              0 => 
              array (
                0 => 'Google Analytics',
                1 => '--div--',
              ),
              1 => 
              array (
                0 => 'Google Analytics',
                1 => 'google-analytics',
              ),
              2 => 
              array (
                0 => 'Google Analytics Universal',
                1 => 'google-analytics-universal',
              ),
              3 => 
              array (
                0 => 'Google Tag Manager',
                1 => '--div--',
              ),
              4 => 
              array (
                0 => 'Google Tag Manager',
                1 => 'google-tagmanager',
              ),
              5 => 
              array (
                0 => 'Google Tag Manager - Service',
                1 => 'google-tagmanager-service',
              ),
              6 => 
              array (
                0 => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.provider.div.other',
                1 => '--div--',
              ),
              7 => 
              array (
                0 => 'Facebook Tracking Pixel',
                1 => 'facebook',
              ),
              8 => 
              array (
                0 => 'Matomo',
                1 => 'matomo',
              ),
              9 => 
              array (
                0 => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.provider.other',
                1 => 'other',
              ),
              10 => 
              array (
                0 => 'Youtube',
                1 => 'youtube',
              ),
              11 => 
              array (
                0 => 'Vimeo',
                1 => 'vimeo',
              ),
            ),
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'onChange' => 'reload',
        ),
        'title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.title.label',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim,required',
          ),
        ),
        'description' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.description.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.description.description',
          'config' => 
          array (
            'type' => 'text',
            'enableRichtext' => true,
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim,required',
          ),
        ),
        'state' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.state.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.state.description',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_core.xlf:labels.disabled',
                1 => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
              ),
            ),
            'default' => 1,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'preselected' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.preselected.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.preselected.description',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_core.xlf:labels.disabled',
                1 => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'required' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.required.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.required.description',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_core.xlf:labels.disabled',
                1 => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'opt_out' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.opt_out.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.opt_out.description',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_core.xlf:labels.disabled',
                1 => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'only_once' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.only_once.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.only_once.description',
          'config' => 
          array (
            'type' => 'check',
            'items' => 
            array (
              0 => 
              array (
                0 => 'LLL:EXT:lang/locallang_core.xlf:labels.disabled',
                1 => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled',
              ),
            ),
            'default' => 0,
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'snippet' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.snippet.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.snippet.description',
          'config' => 
          array (
            'type' => 'text',
            'renderType' => 't3editor',
            'format' => 'javascript',
            'cols' => 40,
            'rows' => 15,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:other',
        ),
        'callback' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.callback.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.callback.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
        ),
        'domain' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.domain.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.domain.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:IN:matomo',
        ),
        'api_key' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.api_key.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.api_key.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:!=:other',
        ),
        'gtm_tag_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_tag_title.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_tag_title.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:google-tagmanager-service',
        ),
        'gtm_trigger_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_trigger_title.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_trigger_title.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:google-tagmanager-service',
        ),
        'gtm_trigger_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_trigger_name.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_trigger_name.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:google-tagmanager-service',
        ),
        'gtm_variable_title' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_variable_title.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_variable_title.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:google-tagmanager-service',
        ),
        'gtm_variable_name' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_variable_name.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.gtm_variable_name.description',
          'config' => 
          array (
            'type' => 'input',
            'size' => 30,
            'eval' => 'trim',
            'behaviour' => 
            array (
              'allowLanguageSynchronization' => true,
            ),
          ),
          'displayCond' => 'FIELD:provider:=:google-tagmanager-service',
        ),
        'cookies' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.cookies.label',
          'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.cookies.description',
          'config' => 
          array (
            'type' => 'inline',
            'foreign_table' => 'tx_wecookieconsent_domain_model_cookie',
            'foreign_field' => 'service',
            'foreign_sortby' => 'sorting',
            'maxitems' => 9999,
            'appearance' => 
            array (
              'newRecordLinkTitle' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.cookies.button',
              'collapseAll' => 1,
              'levelLinksPosition' => 'bottom',
              'useSortable' => 1,
              'enabledControls' => 
              array (
                'info' => false,
                'new' => true,
                'dragdrop' => true,
                'sort' => false,
                'hide' => true,
                'delete' => true,
                'localize' => true,
              ),
            ),
          ),
        ),
        'categories' => 
        array (
          'exclude' => true,
          'label' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.category.label',
          'config' => 
          array (
            'type' => 'select',
            'renderType' => 'selectTree',
            'foreign_table' => 'sys_category',
            'foreign_table_where' => ' AND {#sys_category}.{#sys_language_uid} IN (-1, 0)',
            'MM' => 'sys_category_record_mm',
            'MM_opposite_field' => 'items',
            'MM_match_fields' => 
            array (
              'tablenames' => 'tx_wecookieconsent_domain_model_service',
              'fieldname' => 'categories',
            ),
            'size' => 20,
            'maxitems' => 9999,
            'treeConfig' => 
            array (
              'parentField' => 'parent',
              'appearance' => 
              array (
                'expandAll' => true,
                'showHeader' => true,
                'maxLevels' => 99,
              ),
            ),
            'description' => 'LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.category.description',
          ),
        ),
      ),
    ),
  ),
  'categoryRegistry' => 'O:40:"TYPO3\\CMS\\Core\\Category\\CategoryRegistry":4:{s:11:"' . "\0" . '*' . "\0" . 'registry";a:1:{s:39:"tx_wecookieconsent_domain_model_service";a:1:{s:10:"categories";a:3:{s:5:"label";s:124:"LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.category.label";s:11:"description";s:130:"LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.category.description";s:18:"fieldConfiguration";a:1:{s:11:"description";s:130:"LLL:EXT:we_cookie_consent/Resources/Private/Language/locallang_db.xlf:tx_wecookieconsent_domain_model_service.category.description";}}}}s:13:"' . "\0" . '*' . "\0" . 'extensions";a:1:{s:17:"we_cookie_consent";a:1:{s:39:"tx_wecookieconsent_domain_model_service";a:1:{s:10:"categories";s:10:"categories";}}}s:20:"' . "\0" . '*' . "\0" . 'addedCategoryTabs";a:1:{s:39:"tx_wecookieconsent_domain_model_service";s:39:"tx_wecookieconsent_domain_model_service";}s:11:"' . "\0" . '*' . "\0" . 'template";s:60:"


CREATE TABLE %s (
  %s int(11) DEFAULT \'0\' NOT NULL
);


";}',
);
#