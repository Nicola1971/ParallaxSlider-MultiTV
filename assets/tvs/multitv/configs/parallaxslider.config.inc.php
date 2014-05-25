<?php
$settings['display'] = 'vertical';
$settings['fields'] = array(
    'slidedirection' => array(
        'caption' => 'slide direction',
        'type' => 'dropdown',
        'elements' => ' ||da-slide-fromright||da-slide-fromleft||da-slide-toright||da-slide-toleft'
    ),
    'image' => array(
        'caption' => 'Image',
        'type' => 'image'
    ),
    'thumb' => array(
        'caption' => 'Thumbnail',
        'type' => 'thumb',
        'thumbof' => 'image'
    ),
    'title' => array(
        'caption' => 'Caption Title',
        'type' => 'text'
    ),

    'legend' => array(
        'caption' => 'Caption text',
        'type' => 'richtext'
    ),
    'link' => array(
        'caption' => 'Link',
        'type' => 'text'
    ),
    'readmoretext' => array(
        'caption' => 'read more text',
        'type' => 'text'
    )
);
$settings['templates'] = array(
    'outerTpl' => '<div id="da-slider" class="da-slider">[+wrapper+]<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav></div>',
    'rowTpl' => '<div class="da-slide [+slidedirection+]">
    <h2>[+title+]</h2><p>[+legend+]</p><a href="[+link+]" class="da-link">[+readmoretext:ne=``:then=`[+readmoretext+]`:else=`read more`+]</a>
					<div class="da-img"><img src="[+image+]" alt="[+title+]" /></div>
				</div>'
);