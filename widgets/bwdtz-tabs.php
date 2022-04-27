<?php
namespace CreativeTabZone\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class BWDTZTabs extends Widget_Base {

	public function get_name() {
		return esc_html__( 'NameTabsZone', 'bwd-tabs-zone' );
	}

	public function get_title() {
		return esc_html__( 'BWD Tabs Zone', 'bwd-tabs-zone' );
	}

	public function get_icon() {
		return 'bwdtz-tabs-icon eicon-tabs';
	}

	public function get_categories() {
		return [ 'bwd-tabs-zone-category' ];
	}

	public function get_script_depends() {
		return [ 'bwd-tabs-zone-category' ];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'bwdtz_tabs_content_section',
			[
				'label' => esc_html__( 'Layout', 'bwd-tabs-zone' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);
        $this->add_control(
			'bwdtz_tabs_zone_style',
			[
				'label' => esc_html__( 'Choose Style', 'bwd-tabs-zone' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'bwd-tabs-zone' ),
					'style2' => esc_html__( 'Style 2', 'bwd-tabs-zone' ),
					'style3' => esc_html__( 'Style 3', 'bwd-tabs-zone' ),
					'style4' => esc_html__( 'Style 4', 'bwd-tabs-zone' ),
					'style5' => esc_html__( 'Style 5', 'bwd-tabs-zone' ),
					'style6' => esc_html__( 'Style 6', 'bwd-tabs-zone' ),
					'style7' => esc_html__( 'Style 7', 'bwd-tabs-zone' ),
					'style8' => esc_html__( 'Style 8', 'bwd-tabs-zone' ),
					'style9' => esc_html__( 'Style 9', 'bwd-tabs-zone' ),
					'style10' => esc_html__( 'Style 10', 'bwd-tabs-zone' ),
					'style11' => esc_html__( 'Style 11', 'bwd-tabs-zone' ),
					'style12' => esc_html__( 'Style 12', 'bwd-tabs-zone' ),
					'style13' => esc_html__( 'Style 13', 'bwd-tabs-zone' ),
					'style14' => esc_html__( 'Style 14', 'bwd-tabs-zone' ),
					'style15' => esc_html__( 'Style 15', 'bwd-tabs-zone' ),
					'style16' => esc_html__( 'Style 16', 'bwd-tabs-zone' ),
					'style17' => esc_html__( 'Style 17', 'bwd-tabs-zone' ),
					'style18' => esc_html__( 'Style 18', 'bwd-tabs-zone' ),
					'style19' => esc_html__( 'Style 19', 'bwd-tabs-zone' ),
					'style20' => esc_html__( 'Style 20', 'bwd-tabs-zone' ),
					'style21' => esc_html__( 'Style 21', 'bwd-tabs-zone' ),
					'style22' => esc_html__( 'Style 22', 'bwd-tabs-zone' ),
					'style23' => esc_html__( 'Style 23', 'bwd-tabs-zone' ),
					'style24' => esc_html__( 'Style 24', 'bwd-tabs-zone' ),
					'style25' => esc_html__( 'Style 25', 'bwd-tabs-zone' ),
					'style26' => esc_html__( 'Style 26', 'bwd-tabs-zone' ),
					'style27' => esc_html__( 'Style 27', 'bwd-tabs-zone' ),
					'style28' => esc_html__( 'Style 28', 'bwd-tabs-zone' ),
					'style29' => esc_html__( 'Style 29', 'bwd-tabs-zone' ),
					'style30' => esc_html__( 'Style 30', 'bwd-tabs-zone' ),
				],
			]
		);
		
		
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'bwdtz_tabs_title', [
				'label' => esc_html__( 'Name', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXT,
				'default' => esc_html__( 'Web Developer' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'bwdtz_tabs_description', [
				'label' => esc_html__( 'Description', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate eaque ullam dolore ex quam nesciunt debitis deserunt cumque tempora, vitae, sapiente nostrum culpa nulla doloribus! Atque, necessitatibus explicabo. Facilis, voluptatibus?' , 'bwd-tabs-zone' ),
				'label_block' => true,
			]
		);
		$this->add_control(
			'bwdtz_tabs',
			[
				'label' => esc_html__( 'Meet The Team', 'bwd-tabs-zone' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'bwdtz_tabs_title' => esc_html__( 'Title #1', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Title #2', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Title #3', 'bwd-tabs-zone' ),
					],
					[
						'bwdtz_tabs_title' => esc_html__( 'Title #4', 'bwd-tabs-zone' ),
					],
				],
				'title_field' => `{{{ bwdtz_tabs_title }}}`,
			]
		);
		$this->end_controls_section(); 
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
	   ?>
	   	<div class="bwdtz-tab-one">
			<div class="bwdtz-nav">
			<?php
			if ( $settings['bwdtz_tabs'] ) {
				foreach (  $settings['bwdtz_tabs'] as $item ) {
				echo '<div class="sk_name elementor-repeater-item-' . esc_attr( $item['_id'] ) . '">'; ?>
					<button class="bwdtz-nav-link active-link" id="home-tab"><?php echo esc_html($item['bwdtz_tabs_title']); ?></button>
				</div>
				<?php
				}
			} ?>
			</div>
			<div class="bwdtz-tab-content">
			<?php
			if ( $settings['bwdtz_tabs'] ) {
				foreach (  $settings['bwdtz_tabs'] as $item ) {
				echo '<div class="bwdtz-tab-pane active-tab-pane elementor-repeater-item-' . esc_attr( $item['_id'] ) . '" id="home">'; ?>
					<p><?php echo esc_html($item['bwdtz_tabs_description']); ?></p>
				</div>
				<?php
				}
			}
			?>
			</div>
		</div>
	   <?php
	}
}			 
		
		
