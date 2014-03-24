<?php
namespace gms\system\game\provider;
use gms\data\game\GameServer;
use wcf\util\JSON;

/**
 * Implementation of GameProvider for Wildstar
 *
 * @author	Niklas Siepmann
 * @copyright	2014
 * @license	Creative Commons 3.0 <BY-NC-SA> <http://creativecommons.org/licenses/by-nc-sa/3.0/deed>
 * @package	com.guilded.gms.game.gw2
 * @subpackage	system.game.provider
 * @category	Guilded 2.0
 */
 
 class WildstarGameProvider extends AbstractGameProvider implements IGameProvider {
	/**
	 * @see	\wcf\system\game\provider\AbstractGameProvider::$baseUrl
	 */
	protected $baseUrl  = '';

	/**
	 * @see	\wcf\system\game\provider\IGameProvider::getGuild()
	 */
	public function getGuild($server, $name) {
		// API not released yet
		return null
	}
	
	/**
	 * @see	\wcf\system\game\provider\IGameProvider::getServer()
	 */
	public function getServer($name) {
		// API not released yet
		return null;
	}
	
	/**
	 * @see	\wcf\system\game\provider\IGameProvider::getCharacter()
	 */
	public function getCharacter($server, $name) {
		// API not released yet
		return null;
	}
	
	/**
	 * @see	\wcf\system\game\provider\IGameProvider::getItem()
	 */
	public function getItem($itemID) {
		// API not released yet
		return null;
	}

	/**
	 * Sending request and returns response data.
	 */
	protected function sendRequest($url) {
		parent::sendRequest($url);

		$this->data = JSON::decode($this->data, true);
	}
}