<?php
namespace VMFDS\VmfdsAdventskalender\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Christoph Fischer <christoph.fischer@volksmission.de>, Volksmission Freudenstadt
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class VMFDS\VmfdsAdventskalender\Controller\WindowController.
 *
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class WindowControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \VMFDS\VmfdsAdventskalender\Controller\WindowController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('VMFDS\\VmfdsAdventskalender\\Controller\\WindowController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllWindowsFromRepositoryAndAssignsThemToView() {

		$allWindows = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$windowRepository = $this->getMock('VMFDS\\VmfdsAdventskalender\\Domain\\Repository\\WindowRepository', array('findAll'), array(), '', FALSE);
		$windowRepository->expects($this->once())->method('findAll')->will($this->returnValue($allWindows));
		$this->inject($this->subject, 'windowRepository', $windowRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('windows', $allWindows);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenWindowToView() {
		$window = new \VMFDS\VmfdsAdventskalender\Domain\Model\Window();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('window', $window);

		$this->subject->showAction($window);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenWindowToView() {
		$window = new \VMFDS\VmfdsAdventskalender\Domain\Model\Window();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newWindow', $window);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($window);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenWindowToWindowRepository() {
		$window = new \VMFDS\VmfdsAdventskalender\Domain\Model\Window();

		$windowRepository = $this->getMock('VMFDS\\VmfdsAdventskalender\\Domain\\Repository\\WindowRepository', array('add'), array(), '', FALSE);
		$windowRepository->expects($this->once())->method('add')->with($window);
		$this->inject($this->subject, 'windowRepository', $windowRepository);

		$this->subject->createAction($window);
	}
}
