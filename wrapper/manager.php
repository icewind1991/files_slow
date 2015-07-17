<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\Files_Slow\Wrapper;

use OC\Files\Filesystem;
use OC\Files\Storage\Storage;

class Manager {
	/**
	 * @var int delay in ms
	 */
	private $delayTime;

	/**
	 * Manager constructor.
	 *
	 * @param int $delayTime
	 */
	public function __construct($delayTime) {
		$this->delayTime = $delayTime;
	}


	public function setupStorageWrapper() {
		Filesystem::addStorageWrapper('crawl', function ($mountPoint, Storage $storage) {
			return new Crawl(['storage' => $storage, 'delay' => $this->delayTime]);
		});
	}
}
