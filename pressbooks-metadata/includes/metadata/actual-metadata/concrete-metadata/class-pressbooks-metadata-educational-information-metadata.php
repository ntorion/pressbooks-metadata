<?php


require_once plugin_dir_path( __FILE__ )
. '../class-pressbooks-metadata-plugin-metadata.php';

/**
 * The educational information (book and chapter level)  metadata included by this plugin.
 *
 * @since      0.2
 *
 * @package    Pressbooks_Metadata
 * @subpackage Pressbooks_Metadata/includes/metadata/actual-metadata/concrete-metadata
 * @author     Vasilis Georgoudis <vasilios.georgoudis@gmail.com>
 */
class Pressbooks_Metadata_Educational_Information_Metadata extends Pressbooks_Metadata_Plugin_Metadata {

	/**
	 * The class instance.
	 *
	 * @since  0.2
	 * @access private
	 * @var    Pressbooks_Metadata_Plugin_Metadata $instance The class instance.
	 */
	private static $instance = NULL;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since  0.2
	 */
	protected function __construct() {

		parent::__construct();

		// Educational Information part
		$edu_info = new Pressbooks_Metadata_Meta_Box(
			'Educational Information',
			'',
			'educational-information' );
		$edu_info->add_post_type( 'metadata' );


		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Subject Name', '* The Subject Name is required', 'subject', '', '', '', false, '',
			'name' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Small Description', 'A short description about this subject', 'description', '', '', '', false, '',
			'description' ) );

		$edu_info->add_field( new Pressbooks_Metadata_List_Field( 'ISCED field of education',
			'Broad field of education according to ISCED-F 2013'. '<br><a target="_blank" href="http://www.uis.unesco.org/Education/Documents/isced-fields-of-education-training-2013.pdf">Click Here for more information</a>',
			'isced_field', '', '', '00',
			array(
				'00' => 'Generic programmes and qualifications',
				'01' => 'Education',
				'02' => 'Arts and humanities',
				'03' => 'Social sciences, journalism and information',
				'04' => 'Business, administration and law',
				'05' => 'Natural sciences, mathematics and statistics',
				'06' => 'Information and Communication Technologies',
				'07' => 'Engineering, manufacturing and construction',
				'08' => 'Agriculture, forestry, fisheries and veterinary',
				'09' => 'Health and welfare',
				'10' => 'Services',
			), '' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Provider', 'The Organization, University or Person who provides this subject', 'provider', '', '', '', false, '',
			'provider' ) );


		$edu_info->add_field( new Pressbooks_Metadata_List_Field( 'ISCED level of education',
			'Level of education according to ISCED-P 2011'.'<br><a target="_blank" href="http://www.uis.unesco.org/Education/Documents/isced-2011-en.pdf">Click Here for more information</a>',
			'isced_level', '', '', '0',
			array(
				'0' => 'Early Childhood Education',
				'1' => 'Primary education',
				'2' => 'Lower secondary education',
				'3' => 'Upper secondary education',
				'4' => 'Post-secondary non-tertiary education',
				'5' => 'Short-cycle tertiary education',
				'6' => 'Bachelor’s or equivalent level',
				'7' => 'Master’s or equivalent level',
				'8' => 'Doctoral or equivalent level',
				'9' => 'Not elsewhere classified',
			), '' ) );

		$edu_info->add_field( new Pressbooks_Metadata_List_Field( 'Age Range',
			'The target age of this book',
			'age_range', '', '', '18',
			array(
				'18' => 'Adults',
				'17' => '17-18 years',
				'16' => '16-17 years',
				'15' => '15-16 years',
				'14' => '14-15 years',
				'13' => '13-14 years',
				'12' => '12-13 years',
				'11' => '11-12 years',
				'10' => '10-11 years',
				'9' => '9-10 years',
				'8' => '8-9 years',
				'7' => '7-8 years',
				'6' => '6-7 years',
				'5' => '5-3 years'
			), 'typicalAgeRange' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Educational Level', 'The level of this subject. For ex. B1 for an English Course, or Grade 2 for a Physics Course', 'level', '', '', '', false, '',
			'' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Educational Framework', 'The Framework that the educational level belongs to', 'framework', '', '', '', false, '',
			'' ) );


		$edu_info->add_field( new Pressbooks_Metadata_List_Field(
			'Learning Resource Type',
			'The kind of resource this book represents',
			'learning_resource_type', '', '', 'course',
			array(
				'course' => 'Course',
				'exam' => 'Examination',
				'exercise' => 'Exercise'
			), 'learningResourceType' ) );

		$edu_info->add_field( new Pressbooks_Metadata_List_Field(
			'Interactivity Type',
			'The interactivity type of this book',
			'interactivity_type', '', '', 'mixed',
			array(
				'active' => 'Active',
				'expositive' => 'Expositive',
				'mixed' => 'Mixed'
			), 'interactivityType' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Number_Field(
			'Class Learning Time (hours)', '',
			'time_required', '', '', 0, false, 0, '', '', 'timeRequired' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field( 'License URL',
			'', 'rights_url', '', '', '', false, 'http://site.com/',
			'license' ) );

		$edu_info->add_field( new Pressbooks_Metadata_Text_Field(
			'Bibliography URL',
			'The URL of a website/book this book is inspirated of',
			'bibliography_url',
			'', '', '', false, 'http://site.com/',
			'isBasedOnUrl' ) );

		$this->add_component( $edu_info );

		

	}

	/**
	 * Returns the class instance.
	 *
	 * @since  0.2
	 * @return Pressbooks_Metadata_Educational_Information_Metadata The class instance.
	 */
	public static function get_instance() {

		if ( NULL == Pressbooks_Metadata_Educational_Information_Metadata::$instance ) {
			Pressbooks_Metadata_Educational_Information_Metadata::$instance
				= new Pressbooks_Metadata_Educational_Information_Metadata();
		}
		return Pressbooks_Metadata_Educational_Information_Metadata::$instance;

	}


}
