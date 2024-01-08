<?php

return array(

    'Select' => 'Vel',
    'Deselect_All' => 'Deselect All',
    'Select_All' => 'Select All',
    'Erase' => 'Slett',
    'Open' => 'Opne',
    'Confirm_del' => 'Er du sikker på at du vil slette denne fila?',
    'All' => 'Alle',
    'Files' => 'Filer',
    'Images' => 'Bilete',
    'Archives' => 'Arkiv',
    'Error_Upload' => 'Den opplasta fila over over maksimal tillaten storleik.',
    'Error_extension' => 'Denne filtypen er ikkje lov.',
    'Upload_file' => 'Last opp fil',
    'Filters' => 'Filter',
    'Videos' => 'Videoar',
    'Music' => 'Musikk',
    'New_Folder' => 'Ny mappe',
    'Folder_Created' => 'Mappe oppretta',
    'Existing_Folder' => 'Eksisterande mappe',
    'Confirm_Folder_del' => 'Er du sikker på at du vil slette mappa og alt innhaldet?',
    'Return_Files_List' => 'Tilbake til filoversikta',
    'Preview' => 'Førehandsvising',
    'Download' => 'Last ned',
    'Insert_Folder_Name' => 'Gi mappa eit namn:',
    'Root' => 'Rot',
    'Rename' => 'Gi nytt namn',
    'Back' => 'Tilbake',
    'View' => 'Vising',
    'View_list' => 'Listevising',
    'View_columns_list' => 'Side ved side',
    'View_boxes' => 'Boksvising',
    'Toolbar' => 'Verktøylinje',
    'Actions' => 'Gjeremål',
    'Rename_existing_file' => 'Fila er oppretta frå før',
    'Rename_existing_folder' => 'Mappa er oppretta frå før',
    'Empty_name' => 'Tomt namn',
    'Text_filter' => 'Tekst-filter',
    'Swipe_help' => 'Sveip filnamnet/mappenamnet for å sjå alternativ',
    'Upload_base' => 'Vanleg opplasting',
    'Upload_base_help' => "Dra og slepp filer (moderne nettlesarar) eller klikk på knappen «Legg til fil(er)» øvst og deretter på «Start opplasting». Når opplastinga er ferdig, klikk knappen «Tilbake til filoversikta».",
    'Upload_add_files' => 'Legg til fil(er)',
    'Upload_start' => 'Start opplasting',
    'Upload_error_messages' =>array(
        1 => 'Fila enn større enn grensa upload_max_filesize i php.ini',
        2 => 'Fila er større enn direktivet MAX_FILE_SIZE i HTML-skjemaet',
        3 => 'Fila vart berre delvis opplasta',
        4 => 'Inga fil vart opplasta',
        6 => 'Manglar mappe for mellombels lagring',
        7 => 'Fekk ikkje til å skrive fila til disken',
        8 => 'Ei PHP-utviding stansa filopplastinga',
        'post_max_size' => 'Fila enn større enn det som er sett som post_max_size i php.ini',
        'max_file_size' => 'File er for stor',
        'min_file_size' => 'File er for lita',
        'accept_file_types' => 'Filetypen er ikkje lov',
        'max_number_of_files' => 'Så mange filer er ikkje lov',
        'max_width' => 'Biletet er for breitt',
        'min_width' => 'Biletet er ikkje breitt nok',
        'max_height' => 'Biletet er for høgt',
        'min_height' => 'Biletet er ikkje høgt nok',
        'abort' => 'Filopplasting avbroten',
        'image_resize' => 'Kunne ikkje endre storleik på biletet'
    ),
    'Upload_url' => 'URL for opplasting',
    'Type_dir' => 'Mappe',
    'Type' => 'Type',
    'Dimension' => 'Dimensjonar',
    'Size' => 'Storleik',
    'Date' => 'Dato',
    'Filename' => 'Filnamn',
    'Operations' => 'Handlingar',
    'Date_type' => 'd.m.y',
    'OK' => 'OK',
    'Cancel' => 'Avbryt',
    'Sorting' => 'Sortering',
    'Show_url' => 'Vis URL',
    'Extract' => 'Pakk ut her',
    'File_info' => 'Fil-info',
    'Edit_image' => 'Rediger bilete',
    'Duplicate' => 'Duplikat',
    'Folders' => 'Mapper',
    'Copy' => 'Kopier',
    'Cut' => 'Klipp ut',
    'Paste' => 'Lim inn',
    'CB' => 'Utklippstavle', // clipboard
    'Paste_Here' => 'Lim inn i denne mappa',
    'Paste_Confirm' => 'Er du sikker på at du vil lime inn i denne mappa? Dette vil overskrive eventuelle eksisterande filer eller mapper.',
    'Paste_Failed' => 'Innnliming feila',
    'Clear_Clipboard' => 'Tøm utklippstavla',
    'Clear_Clipboard_Confirm' => 'Er du sikker på at du vil tømme utklippstavla?',
    'Files_ON_Clipboard' => 'Det er filer på utklippstavla.',
    'Copy_Cut_Size_Limit' => 'Dei valde filene/mappene er for store for %s. Grense: %d MB/operasjon', // %s = cut or copy
    'Copy_Cut_Count_Limit' => 'Du valde for mange filer/mapper for %s. Grense: %d filer/operasjon', // %s = cut or copy
    'Copy_Cut_Not_Allowed' => 'Du har ikkje lov til å %s filer.', // %s(1) = cut or copy, %s(2) = files or folders
    'Image_Editor_No_Save' => 'Kunne ikkje lagre biletet',
    'Image_Editor_Exit' => "Exit",
    'Image_Editor_Save' => "Save",
    'Zip_No_Extract' => 'Kunne ikkje pakke ut. Fila kan vere skada.',
    'Zip_Invalid' => 'Dette filetternamnet er ikkje støtta. Gyldige filer: zip, gz, tar.',
    'Dir_No_Write' => 'Mappa du valde kan ikkje skrivast til.',
    'Function_Disabled' => 'Funksjonen %s er deaktivert av serveren.', // %s = cut or copy
    'File_Permission' => 'Filløyve',
    'File_Permission_Not_Allowed' => 'Endring av %s løyve er ikkje lov.', // %s = files or folders
    'File_Permission_Recursive' => 'Utfør rekursivt?',
    'File_Permission_Wrong_Mode' => "Filløyvet er feil.",
    'User' => 'Brukar',
    'Group' => 'Gruppe',
    'Yes' => 'Ja',
    'No' => 'Nei',
    'Lang_Not_Found' => 'Kunne ikkje finne språk.',
    'Lang_Change' => 'Endre språk',
    'File_Not_Found' => 'Fann ikkje fila.',
    'File_Open_Edit_Not_Allowed' => 'Du har ikkje lov til å %s denne fila.', // %s = open or edit
    'Edit' => 'Rediger',
    'Edit_File' => "Rediger filinnhaldet",
    'File_Save_OK' => "Fila vart lagra.",
    'File_Save_Error' => "Det oppstod ein feil ved lagring av fila.",
    'New_File' => 'Ny fil',
    'No_Extension' => 'Du må legge til eit fil-etternamn.',
    'Valid_Extensions' => 'Gyldige fil-etternamn: %s', // %s = txt,log etc.
    'Upload_message' => "Slepp fila her for å laste opp",

    'SERVER ERROR' => "SERVERFEIL",
    'forbidden' => "Ikkje lov",
    'wrong path' => "Feil bane",
    'wrong name' => "Feil namn",
    'wrong extension' => "Feil utviding",
    'wrong option' => "Feil val",
    'wrong data' => "Feil data",
    'wrong action' => "Feil handling",
    'wrong sub-action' => "Feil underhandling",
    'no action passed' => "Inga handling sendt",
    'no path' => "Ingen bane",
    'no file' => "Inga fil",
    'view type number missing' => "Manglar typenummer for vising",
    'Not enough Memory' => "Ikkje nok minne",
    'max_size_reached' => "Biletmappa di har nådd sin maksimale storleik %d MB.", //%d = max overall size
    'B' => "B",
    'KB' => "KB",
    'MB' => "MB",
    'GB' => "GB",
    'TB' => "TB",
    'total size' => "Total storleik",
);
