<?php
/**
 * @forked by Julián Torres <irc@extralab.net>
 * This is a fork from theme 'example'
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Jan-Christoph Borchardt, http://jancborchardt.net
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class OC_Theme {

	private $themeEntity;
	private $themeName;
	private $themeTitle;
	private $themeBaseUrl;
	private $themeDocBaseUrl;
	private $themeSyncClientUrl;
	private $themeSlogan;
	private $themeMailHeaderColor;

	/* put your custom text in these variables */
	/* change region name to yours */
	function __construct() {
		$this->themeEntity = 'Podemos Región de Murcia';
		$this->themeName = 'Podemos Región de Murcia';
		$this->themeTitle = 'Podemos Región de Murcia';
		$this->themeBaseUrl = 'https://owncloud.org';
		$this->themeDocBaseUrl = 'https://doc.owncloud.org';
		$this->themeSyncClientUrl = 'https://owncloud.org/install';
		$this->themeSlogan = 'Servicio de alojamiento de archivos';
		$this->themeMailHeaderColor = '#54075b';
	}
	/* nothing after this needs to be adjusted */

	public function getBaseUrl() {
		return $this->themeBaseUrl;
	}

	public function getSyncClientUrl() {
		return $this->themeSyncClientUrl;
	}

	public function getDocBaseUrl() {
		return $this->themeDocBaseUrl;
	}

	public function getTitle() {
		return $this->themeTitle;
	}

	public function getName() {
		return $this->themeName;
	}

	public function getEntity() {
		return $this->themeEntity;
	}

	public function getSlogan() {
		return $this->themeSlogan;
	}

	public function getShortFooter() {
		$footer = '© 2015 <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . $this->getSlogan();

		return $footer;
	}

	public function getLongFooter() {
		$footer = '© 2015 <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>'.
			'<br/>' . $this->getSlogan();

		return $footer;
	}

	public function buildDocLinkToKey($key) {
		return $this->getDocBaseUrl() . '/server/8.0/go.php?to=' . $key;
	}

	public function getMailHeaderColor() {
		return $this->themeMailHeaderColor;
	}

}
