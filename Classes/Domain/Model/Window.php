<?php
namespace VMFDS\VmfdsAdventskalender\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Christoph Fischer <christoph.fischer@volksmission.de>, Volksmission Freudenstadt
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Window
 */
class Window extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * day
	 *
	 * @var integer
	 */
	protected $day = 0;

	/**
	 * type
	 *
	 * @var integer
	 */
	protected $type = 0;

	/**
	 * eventId
	 *
	 * @var string
	 */
	protected $eventId = '';

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * address
	 *
	 * @var string
	 */
	protected $address = '';

	/**
	 * phone
	 *
	 * @var string
	 */
	protected $phone = '';

	/**
	 * email
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * notes
	 *
	 * @var string
	 */
	protected $notes = '';

	/**
	 * internalNotes
	 *
	 * @var string
	 */
	protected $internalNotes = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * Returns the day
	 *
	 * @return integer $day
	 */
	public function getDay() {
		return $this->day;
	}

	/**
	 * Sets the day
	 *
	 * @param integer $day
	 * @return void
	 */
	public function setDay($day) {
		$this->day = $day;
	}

	/**
	 * Returns the type
	 *
	 * @return integer $type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets the type
	 *
	 * @param integer $type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}

	/**
	 * Returns the eventId
	 *
	 * @return string $eventId
	 */
	public function getEventId() {
		return $this->eventId;
	}

	/**
	 * Sets the eventId
	 *
	 * @param string $eventId
	 * @return void
	 */
	public function setEventId($eventId) {
		$this->eventId = $eventId;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the address
	 *
	 * @return string $address
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * Sets the address
	 *
	 * @param string $address
	 * @return void
	 */
	public function setAddress($address) {
		$this->address = $address;
	}

	/**
	 * Returns the phone
	 *
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the notes
	 *
	 * @return string $notes
	 */
	public function getNotes() {
		return $this->notes;
	}

	/**
	 * Sets the notes
	 *
	 * @param string $notes
	 * @return void
	 */
	public function setNotes($notes) {
		$this->notes = $notes;
	}

	/**
	 * Returns the internalNotes
	 *
	 * @return string $internalNotes
	 */
	public function getInternalNotes() {
		return $this->internalNotes;
	}

	/**
	 * Sets the internalNotes
	 *
	 * @param string $internalNotes
	 * @return void
	 */
	public function setInternalNotes($internalNotes) {
		$this->internalNotes = $internalNotes;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

}