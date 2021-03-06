<?php
/**
 * Галерея изображений
 *
 * Таблица авторзагрузки классов
 *
 * @version ${product.version}
 *
 * @copyright 2010, ООО "Два слона", http://dvaslona.ru/
 * @license http://www.gnu.org/licenses/gpl.txt	GPL License 3
 * @author Михаил Красильников <mk@3wstyle.ru>
 *
 * Данная программа является свободным программным обеспечением. Вы
 * вправе распространять ее и/или модифицировать в соответствии с
 * условиями версии 3 либо (по вашему выбору) с условиями более поздней
 * версии Стандартной Общественной Лицензии GNU, опубликованной Free
 * Software Foundation.
 *
 * Мы распространяем эту программу в надежде на то, что она будет вам
 * полезной, однако НЕ ПРЕДОСТАВЛЯЕМ НА НЕЕ НИКАКИХ ГАРАНТИЙ, в том
 * числе ГАРАНТИИ ТОВАРНОГО СОСТОЯНИЯ ПРИ ПРОДАЖЕ и ПРИГОДНОСТИ ДЛЯ
 * ИСПОЛЬЗОВАНИЯ В КОНКРЕТНЫХ ЦЕЛЯХ. Для получения более подробной
 * информации ознакомьтесь со Стандартной Общественной Лицензией GNU.
 *
 * Вы должны были получить копию Стандартной Общественной Лицензии
 * GNU с этой программой. Если Вы ее не получили, смотрите документ на
 * <http://www.gnu.org/licenses/>
 *
 * @package Gallery
 *
 * $Id$
 */

$dir = dirname(__FILE__);

return array(
	'GalleryAbstractActiveRecord' => $dir . '/classes/AbstractActiveRecord.php',
	'GalleryAdminXHRController' => $dir . '/controllers/AdminXHR.php',
	'GalleryAlbum' => $dir . '/classes/Album.php',
	'GalleryAlbumGrouped' => $dir . '/classes/AlbumGrouped.php',
	'GalleryClientGroupedListView' => $dir . '/classes/ClientGroupedListView.php',
	'GalleryClientListView' => $dir . '/classes/ClientListView.php',
	'GalleryClientPopupGroupedView' => $dir . '/classes/ClientPopupGroupedView.php',
	'GalleryClientPopupView' => $dir . '/classes/ClientPopupView.php',
	'GalleryEresusAdminXHRController' => $dir . '/prototype/AdminXHR.php',
	'GalleryFileTooBigException' => $dir . '/classes/Exceptions.php',
	'GalleryGroup' => $dir . '/classes/Group.php',
	'GalleryGroup' => $dir . '/classes/Group.php',
	'GalleryImage' => $dir . '/classes/Image.php',
	'GalleryNullObject' => $dir . '/classes/NullObject.php',
	'GalleryUnsupportedFormatException' => $dir . '/classes/Exceptions.php',
	'GalleryUploadException' => $dir . '/classes/Exceptions.php',
);