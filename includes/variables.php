<?php
/*	
don't make changes! it'll make staying updated much harder.
for updates / questions, please contact web@aasanjose.org
*/

$tsml_days	= array(
	0 => array(0=>'Sunday', 1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday'),
	1 => array(1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 0=>'Sunday'),
	2 => array(2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 0=>'Sunday', 1=>'Monday'),
	3 => array(3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 0=>'Sunday', 1=>'Monday', 2=>'Tuesday'),
	4 => array(4=>'Thursday', 5=>'Friday', 6=>'Saturday', 0=>'Sunday', 1=>'Monday', 2=>'Tuesday', 3=>'Wednesday'),
	5 => array(5=>'Friday', 6=>'Saturday', 0=>'Sunday', 1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday'),
	6 => array(6=>'Saturday', 0=>'Sunday', 1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday'),
);

$tsml_days = $tsml_days[get_option('start_of_week', 0)];

$tsml_nonce = plugin_basename(__FILE__);

$tsml_program = get_option('tsml_program', 'aa');

$tsml_programs = array(
	'al-anon'	=> 'Al-Anon',
	'aa'		=> 'Alcoholics Anonymous',
	'coda'		=> 'Codependents Anonymous',
	'na'		=> 'Narcotics Anonymous',
	'oa'		=> 'Overeaters Anonymous',
	'saa'		=> 'Sex Addicts Anonymous',
);

$tsml_regions = array();

$tsml_types = array(
	'aa' => array(
		'A'		=> 'Atheist / Agnostic',
		'BA'	=> 'Babysitting Available',
		'BE'	=> 'Beginner',
		'B'		=> 'Big Book',
		'CF'	=> 'Child-Friendly', 
		'H'		=> 'Chips', 
		'C'		=> 'Closed', 
		'CAN'	=> 'Candlelight', 
		'AL-AN'	=> 'Concurrent with Al-Anon',
		'AL'	=> 'Concurrent with Alateen',
		'XT'	=> 'Cross Talk Permitted', 
		'DLY'	=> 'Daily', 
		'FF'	=> 'Fragrance Free',
		'G'		=> 'Gay',
		'GR'	=> 'Grapevine',
		'L'		=> 'Lesbian',
		'LIT'	=> 'Literature',
		'LGBTQ'	=> 'LGBTQ',
		'MED'	=> 'Meditation',
		'M'		=> 'Men Only', 
		'O'		=> 'Open',
		'ASL'	=> 'Sign Language',
		'SM'	=> 'Smoking Permitted',
		'S'		=> 'Spanish',
		'SP'	=> 'Speaker',
		'ST'	=> 'Step Meeting',
		'D'		=> 'Topic Discussion', 
		'TR'	=> 'Tradition',
		'T'		=> 'Transgender',
		'X'		=> 'Wheelchair Accessible',
		'W'		=> 'Women Only',
		'Y'		=> 'Young People',
	),
	'al-anon' => array(
		'AC'	=> 'Adult Child Focus',
		'Y'		=> 'Alateen',
		'A'		=> 'Atheist / Agnostic',
		'BA'	=> 'Babysitting Available',
		'BE'	=> 'Beginner',
		'C'		=> 'Closed', 
		'AA'	=> 'Concurrent with AA Meeting',
		'AL'	=> 'Concurrent with Alateen Meeting',
		'FF'	=> 'Fragrance Free',
		'G'		=> 'Gay',
		'L'		=> 'Lesbian',
		'M'		=> 'Men Only', 
		'O'		=> 'Open',
		'S'		=> 'Spanish',
		'SP'	=> 'Speaker',
		'ST'	=> 'Step Meeting',
		'T'		=> 'Transgender',
		'X'		=> 'Wheelchair Accessible',
		'W'		=> 'Women Only',
	),
	'coda' => array(
		'A'		=> 'Atheist / Agnostic',
		'BA'	=> 'Babysitting Available',
		'BE'	=> 'Beginner',
		'B'		=> 'Book Study',
		'CF'	=> 'Child-Friendly', 
		'H'		=> 'Chips', 
		'C'		=> 'Closed', 
		'CAN'	=> 'Candlelight', 
		'AL-AN'	=> 'Concurrent with Al-Anon',
		'AL'	=> 'Concurrent with Alateen',
		'XT'	=> 'Cross Talk Permitted', 
		'DLY'	=> 'Daily', 
		'FF'	=> 'Fragrance Free',
		'G'		=> 'Gay',
		'GR'	=> 'Grapevine',
		'L'		=> 'Lesbian',
		'LIT'	=> 'Literature',
		'LGBTQ'	=> 'LGBTQ',
		'MED'	=> 'Meditation',
		'M'		=> 'Men Only', 
		'O'		=> 'Open',
		'QA'	=> 'Q & A',
		'READ' 	=> 'Reading',
		'SHARE'	=> 'Sharing',
		'ASL'	=> 'Sign Language',
		'SM'	=> 'Smoking Permitted',
		'S'		=> 'Spanish',
		'SP'	=> 'Speaker',
		'ST'	=> 'Step Meeting',
		'TEEN'	=> 'Teens Only',
		'D'		=> 'Topic Discussion', 
		'TR'	=> 'Tradition',
		'T'		=> 'Transgender',
		'X'		=> 'Wheelchair Accessible',
		'W'		=> 'Women Only',
		'WRITE'	=> 'Writing',
		'Y'		=> 'Young People',
	),
	'na' => array(
		'CPT'	=> '12 Concepts',
		'BT'	=> 'Basic Text',
		'BEG'	=> 'Beginner/Newcomer',
		'CAN'	=> 'Candlelight',
		'CW'	=> 'Children Welcome',
		'C'		=> 'Closed', 
		'DISC'	=> 'Discussion/Participation',
		'GL'	=> 'Gay/Lesbian',
		'IP'	=> 'IP Study',
		'IW'	=> 'It Works Study',
		'JFT'	=> 'Just For Today Study',
		'LIT'	=> 'Literature Study',
		'LC'	=> 'Living Clean',
		'M'		=> 'Men',
		'MED'	=> 'Meditation',
		'NS'	=> 'Non-Smoking',
		'O'		=> 'Open',
		'QA'	=> 'Questions & Answers',
		'RA'	=> 'Restricted Access',
		'SMOK'	=> 'Smoking',
		'SPK'	=> 'Speaker',
		'STEP'	=> 'Step',
		'SWG'	=> 'Step Working Guide Study',
		'TOP'	=> 'Topic',
		'TRAD'	=> 'Tradition',
		'VAR'	=> 'Format Varies',
		'X'		=> 'Wheelchair Accessible',
		'W'		=> 'Women',
		'Y'		=> 'Young People',
	),
	'oa' => array(
		'11TH'  => '11th Step',
		'90D'   => '90 Day',
		'AA12'  => 'AA 12/12',
		'AIB'   => 'Ask-It-Basket',
		'B'     => 'Big Book',
		'DOC'   => 'Dignity of Choice',
		'FT'    => 'For Today',
		'LI'    => 'Lifeline',
		'LIS'   => 'Lifeline Sampler',
		'LIT'   => 'Literature Study',
		'MAIN'  => 'Maintenance',
		'MED'   => 'Meditation',
		'NEWB'  => 'New Beginnings',
		'BE'    => 'Newcomer',
		'HOW'   => 'OA H.O.W.',
		'OA23'  => 'OA Second and/or Third Edition',
		'ST'    => 'OA Steps and/or Traditions Study',
		'RELA'  => 'Relapse/12th Step Within',
		'SSP'   => 'Seeking the Spiritual Path',
		'SP'    => 'Speaker',
		'SD'    => 'Speaker/Discussion',
		'SPIR'  => 'Spirituality',
		'TEEN'  => 'Teen Friendly',
		'PROM'  => 'The Promises',
		'TOOL'  => 'Tools',
		'D'     => 'Topic',
		'MISC'  => 'Varies',
		'VOR'   => 'Voices of Recovery',
		'WORK'  => 'Work Book Study',
		'WRIT'  => 'Writing',
	),	
	'saa' => array(
		'C'		=> 'Closed', 
		'M'		=> 'Men Only', 
		'O'		=> 'Open',
		'ST'	=> 'Step Meeting',
		'LGBTQ'	=> 'LGBTQ', 
		'W'		=> 'Women Only',
	),
);

$tsml_types_in_use = get_option('tsml_types_in_use', array_keys($tsml_types[$tsml_program]));
if (!is_array($tsml_types_in_use)) $tsml_types_in_use = array();
