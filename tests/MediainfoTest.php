<?php
namespace Tests;

use danswater\Mediainfo\Mediainfo;
use PHPUnit_Framework_TestCase;

class MediainfoTest extends PHPUnit_Framework_TestCase {
	protected $mediaInfo;

	public function setUp () {
		$this->mediaInfo = new Mediainfo( 'mockfile' );
	}

	public function tearDown () {
		unset( $this->mediaInfo );
	}

	public function testNewMediainfoInstance () {
		$this->assertInstanceOf( 'danswater\Mediainfo\Mediainfo', $this->mediaInfo );
	}

	public function testMediainfoHasProperty () {
		$this->assertTrue( !empty( $this->mediaInfo ) );
	}
} 