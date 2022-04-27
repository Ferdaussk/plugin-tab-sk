<?php
namespace CreativeTabZone\PageSettings;

use Elementor\Controls_Manager;
use Elementor\Core\DocumentTypes\PageBase;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

class Page_Settings {

	const PANEL_TAB = 'new-tab';

	public function __construct() {
		add_action( 'elementor/init', [ $this, 'bwdtz_tabs_add_panel_tab' ] );
		add_action( 'elementor/documents/register_controls', [ $this, 'bwdtz_tabs_register_document_controls' ] );
	}

	public function bwdtz_tabs_add_panel_tab() {
		Controls_Manager::add_tab( self::PANEL_TAB, esc_html__( 'New Tab Zone', 'bwd-tabs-zone' ) );
	}

	public function bwdtz_tabs_register_document_controls( $document ) {
		if ( ! $document instanceof PageBase || ! $document::get_property( 'has_elements' ) ) {
			return;
		}

		$document->start_controls_section(
			'bwdtz_tabs_new_section',
			[
				'label' => esc_html__( 'Settings', 'bwd-tabs-zone' ),
				'tab' => self::PANEL_TAB,
			]
		);

		$document->add_control(
			'bwdtz_tabs_text',
			[
				'label' => esc_html__( 'Title', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Title', 'bwd-tabs-zone' ),
			]
		);

		$document->end_controls_section();
	}
}
