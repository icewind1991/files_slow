<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

namespace OCA\Files_Slow\Wrapper;

use OC\Files\Storage\Wrapper\Wrapper;

class Crawl extends Wrapper {
	/**
	 * @var int delay in ms
	 */
	private $delayTime;

	/**
	 * @param array $parameters
	 */
	public function __construct($parameters) {
		parent::__construct($parameters);
		$this->delayTime = $parameters['delay'];
	}


	private function delay() {
		usleep($this->delayTime * 1000);
	}

	/**
	 * {@inheritdoc}
	 */
	public function mkdir($path) {
		$this->delay();
		return $this->storage->mkdir($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function rmdir($path) {
		$this->delay();
		return $this->storage->rmdir($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function opendir($path) {
		$this->delay();
		return $this->storage->opendir($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_dir($path) {
		$this->delay();
		return $this->storage->is_dir($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function is_file($path) {
		$this->delay();
		return $this->storage->is_file($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function stat($path) {
		$this->delay();
		return $this->storage->stat($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function filetype($path) {
		$this->delay();
		return $this->storage->filetype($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function filesize($path) {
		$this->delay();
		return $this->storage->filesize($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function isCreatable($path) {
		$this->delay();
		return $this->storage->isCreatable($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function isReadable($path) {
		$this->delay();
		return $this->storage->isReadable($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function isUpdatable($path) {
		$this->delay();
		return $this->storage->isUpdatable($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function isDeletable($path) {
		$this->delay();
		return $this->storage->isDeletable($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function isSharable($path) {
		$this->delay();
		return $this->storage->isSharable($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getPermissions($path) {
		$this->delay();
		return $this->storage->getPermissions($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function file_exists($path) {
		$this->delay();
		return $this->storage->file_exists($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function filemtime($path) {
		$this->delay();
		return $this->storage->filemtime($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function file_get_contents($path) {
		$this->delay();
		return $this->storage->file_get_contents($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function file_put_contents($path, $data) {
		$this->delay();
		return $this->storage->file_put_contents($path, $data);
	}

	/**
	 * {@inheritdoc}
	 */
	public function unlink($path) {
		$this->delay();
		return $this->storage->unlink($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function rename($path1, $path2) {
		$this->delay();
		return $this->storage->rename($path1, $path2);
	}

	/**
	 * {@inheritdoc}
	 */
	public function copy($path1, $path2) {
		$this->delay();
		return $this->storage->copy($path1, $path2);
	}

	/**
	 * {@inheritdoc}
	 */
	public function fopen($path, $mode) {
		$this->delay();
		return $this->storage->fopen($path, $mode);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getMimeType($path) {
		$this->delay();
		return $this->storage->getMimeType($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function hash($type, $path, $raw = false) {
		$this->delay();
		return $this->storage->hash($type, $path, $raw);
	}

	/**
	 * {@inheritdoc}
	 */
	public function free_space($path) {
		$this->delay();
		return $this->storage->free_space($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function touch($path, $mtime = null) {
		$this->delay();
		return $this->storage->touch($path, $mtime);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getLocalFile($path) {
		$this->delay();
		return $this->storage->getLocalFile($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function hasUpdated($path, $time) {
		$this->delay();
		return $this->storage->hasUpdated($path, $time);
	}

	/**
	 * @return \OC\Files\Cache\Storage
	 */
	public function getStorageCache() {
		$this->delay();
		return $this->storage->getStorageCache();
	}

	/**
	 * {@inheritdoc}
	 */
	public function getETag($path) {
		$this->delay();
		return $this->storage->getETag($path);
	}

	/**
	 * {@inheritdoc}
	 */
	public function copyFromStorage(\OCP\Files\Storage $sourceStorage, $sourceInternalPath, $targetInternalPath) {
		$this->delay();
		return parent::copyFromStorage($sourceStorage, $sourceInternalPath, $targetInternalPath);
	}

	/**
	 * {@inheritdoc}
	 */
	public function moveFromStorage(\OCP\Files\Storage $sourceStorage, $sourceInternalPath, $targetInternalPath) {
		$this->delay();
		return parent::moveFromStorage($sourceStorage, $sourceInternalPath, $targetInternalPath);
	}
}
