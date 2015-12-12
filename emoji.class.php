<?php
/**
 * Emoji Class
 * 
 * @name emoji.class.php
 * @author Mattia - http://www.matriz.it
 * @version 1.1.0
 * @date May 14, 2015
 * @category PHP Class
 * @copyright (c) 2014 Mattia at Matriz.it (info@matriz.it)
 * @license MIT - http://opensource.org/licenses/mit-license.php
 * @example Visit http://www.matriz.it/projects/php-emoji/ for more informations about this PHP class
 */

class Emoji {
	/**
	 * Lista degli emoji in base all'Unicode
	 * @access private
	 * @var array
	 */
	private $unicode = array();
	
 	/**
	 * Costruttore della classe
	 * @access public
	 */
	public function __construct() {
		// By: http://apps.timwhitlock.info/emoji/tables/unicode
		$this->unicode = array(
			'0023+20E3' => 'hash',
			'0030+20E3' => 'zero',
			'0031+20E3' => 'one',
			'0032+20E3' => 'two',
			'0033+20E3' => 'three',
			'0034+20E3' => 'four',
			'0035+20E3' => 'five',
			'0036+20E3' => 'six',
			'0037+20E3' => 'seven',
			'0038+20E3' => 'eight',
			'0039+20E3' => 'nine',
			'00A9' => 'copyright',
			'00AE' => 'registered',
			'203C' => 'bangbang',
			'2049' => 'interrobang',
			'2122' => 'tm',
			'2139' => 'information_source',
			'2194' => 'left_right_arrow',
			'2195' => 'arrow_up_down',
			'2196' => 'arrow_upper_left',
			'2197' => 'arrow_upper_right',
			'2198' => 'arrow_lower_right',
			'2199' => 'arrow_lower_left',
			'21A9' => 'leftwards_arrow_with_hook',
			'21AA' => 'arrow_right_hook',
			'231A' => 'watch',
			'231B' => 'hourglass',
			'23E9' => 'fast_forward',
			'23EA' => 'rewind',
			'23EB' => 'arrow_double_up',
			'23EC' => 'arrow_double_down',
			'23F0' => 'alarm_clock',
			'23F3' => 'hourglass_flowing_sand',
			'24C2' => 'm',
			'25AA' => 'black_small_square',
			'25AB' => 'white_small_square',
			'25B6' => 'arrow_forward',
			'25C0' => 'arrow_backward',
			'25FB' => 'white_medium_square',
			'25FC' => 'black_medium_square',
			'25FD' => 'white_medium_small_square',
			'25FE' => 'black_medium_small_square',
			'2600' => 'sunny',
			'2601' => 'cloud',
			'260E' => array('phone', 'telephone'),
			'2611' => 'ballot_box_with_check',
			'2614' => 'umbrella',
			'2615' => 'coffee',
			'261D' => 'point_up',
			'263A' => 'relaxed',
			'2648' => 'aries',
			'2649' => 'taurus',
			'264A' => 'gemini',
			'264B' => 'cancer',
			'264C' => 'leo',
			'264D' => 'virgo',
			'264E' => 'libra',
			'264F' => 'scorpius',
			'2650' => 'sagittarius',
			'2651' => 'capricorn',
			'2652' => 'aquarius',
			'2653' => 'pisces',
			'2660' => 'spades',
			'2663' => 'clubs',
			'2665' => 'hearts',
			'2666' => 'diamonds',
			'2668' => 'hotsprings',
			'267B' => 'recycle',
			'267F' => 'wheelchair',
			'2693' => 'anchor',
			'26A0' => 'warning',
			'26A1' => 'zap',
			'26AA' => 'white_circle',
			'26AB' => 'black_circle',
			'26BD' => 'soccer',
			'26BE' => 'baseball',
			'26C4' => 'snowman',
			'26C5' => 'partly_sunny',
			'26CE' => 'ophiuchus',
			'26D4' => 'no_entry',
			'26EA' => 'church',
			'26F2' => 'fountain',
			'26F3' => 'golf',
			'26F5' => 'sailboat',
			'26FA' => 'tent',
			'26FD' => 'fuelpump',
			'2702' => 'scissors',
			'2705' => 'white_check_mark',
			'2708' => 'airplane',
			'2709' => 'envelope',
			'270A' => 'fist',
			'270B' => 'raised_hand',
			'270C' => 'v',
			'270F' => 'pencil2',
			'2712' => 'black_nib',
			'2714' => 'heavy_check_mark',
			'2716' => 'heavy_multiplication_x',
			'2728' => 'sparkles',
			'2733' => 'eight_spoked_asterisk',
			'2734' => 'eight_pointed_black_star',
			'2744' => 'snowflake',
			'2747' => 'sparkle',
			'274C' => 'x',
			'274E' => 'negative_squared_cross_mark',
			'2753' => 'question',
			'2754' => 'grey_question',
			'2755' => 'grey_exclamation',
			'2757' => 'exclamation',
			'2764' => 'heart',
			'2795' => 'heavy_plus_sign',
			'2796' => 'heavy_minus_sign',
			'2797' => 'heavy_division_sign',
			'27A1' => 'arrow_right',
			'27B0' => 'curly_loop',
			'2934' => 'arrow_heading_up',
			'2935' => 'arrow_heading_down',
			'2B05' => 'arrow_left',
			'2B06' => 'arrow_up',
			'2B07' => 'arrow_down',
			'2B1B' => 'black_large_square',
			'2B1C' => 'white_large_square',
			'2B50' => 'star',
			'2B55' => 'o',
			'3030' => 'wavy_dash',
			'303D' => 'part_alternation_mark',
			'3297' => 'congratulations',
			'3299' => 'secret',
			'1F004' => 'mahjong',
			'1F0CF' => 'black_joker',
			'1F170' => 'a',
			'1F171' => 'b',
			'1F17E' => 'o2',
			'1F17F' => 'parking',
			'1F18E' => 'ab',
			'1F191' => 'cl',
			'1F192' => 'cool',
			'1F193' => 'free',
			'1F194' => 'id',
			'1F195' => 'new',
			'1F196' => 'ng',
			'1F197' => 'ok',
			'1F198' => 'sos',
			'1F199' => 'up',
			'1F19A' => 'vs',
			'1F1E9+1F1EA' => 'de',
			'1F1EC+1F1E7' => 'gb',
			'1F1E8+1F1F3' => 'cn',
			'1F1EF+1F1F5' => 'jp',
			'1F1F0+1F1F7' => 'kr',
			'1F1EB+1F1F7' => 'fr',
			'1F1EA+1F1F8' => 'es',
			'1F1EE+1F1F9' => 'it',
			'1F1FA+1F1F8' => 'us',
			'1F1F7+1F1FA' => 'ru',
			'1F201' => 'koko',
			'1F202' => 'sa',
			'1F21A' => 'u7121',
			'1F22F' => 'u6307',
			'1F232' => 'u7981',
			'1F233' => 'u7a7a',
			'1F234' => 'u5408',
			'1F235' => 'u6e80',
			'1F236' => 'u6709',
			'1F237' => 'u6708',
			'1F238' => 'u7533',
			'1F239' => 'u5272',
			'1F23A' => 'u55b6',
			'1F250' => 'ideograph_advantage',
			'1F251' => 'accept',
			'1F300' => 'cyclone',
			'1F301' => 'foggy',
			'1F302' => 'closed_umbrella',
			'1F303' => '',
			'1F304' => 'sunrise_over_mountains',
			'1F305' => 'sunrise',
			'1F306' => 'city_sunset',
			'1F307' => 'city_sunrise',
			'1F308' => 'rainbow',
			'1F309' => 'bridge_at_night',
			'1F30A' => 'ocean',
			'1F30B' => 'volcano',
			'1F30C' => 'milky_way',
			'1F30F' => 'earth_asia',
			'1F311' => 'new_moon',
			'1F313' => 'first_quarter_moon',
			'1F314' => 'waxing_gibbous_moon',
			'1F315' => 'full_moon',
			'1F319' => 'crescent_moon',
			'1F31B' => 'first_quarter_moon_with_face',
			'1F31F' => 'star2',
			'1F320' => 'stars',
			'1F330' => 'chestnut',
			'1F331' => 'seedling',
			'1F334' => 'palm_tree',
			'1F335' => 'cactus',
			'1F337' => 'tulip',
			'1F338' => 'cherry_blossom',
			'1F339' => 'rose',
			'1F33A' => 'hibiscus',
			'1F33B' => 'sunflower',
			'1F33C' => 'blossom',
			'1F33D' => 'corn',
			'1F33E' => 'ear_of_rice',
			'1F33F' => 'herb',
			'1F340' => 'four_leaf_clover',
			'1F341' => 'maple_leaf',
			'1F342' => 'fallen_leaf',
			'1F343' => 'leaves',
			'1F344' => 'mushroom',
			'1F345' => 'tomato',
			'1F346' => 'eggplant',
			'1F347' => 'grapes',
			'1F348' => 'melon',
			'1F349' => 'watermelon',
			'1F34A' => 'tangerine',
			'1F34C' => 'banana',
			'1F34D' => 'pineapple',
			'1F34E' => 'apple',
			'1F34F' => 'green_apple',
			'1F351' => 'peach',
			'1F352' => 'cherries',
			'1F353' => 'strawberry',
			'1F354' => 'hamburger',
			'1F355' => 'pizza',
			'1F356' => 'meat_on_bone',
			'1F357' => 'poultry_leg',
			'1F358' => 'rice_cracker',
			'1F359' => 'rice_ball',
			'1F35A' => 'rice',
			'1F35B' => 'curry',
			'1F35C' => 'ramen',
			'1F35D' => 'spaghetti',
			'1F35E' => 'bread',
			'1F35F' => 'fries',
			'1F360' => 'sweet_potato',
			'1F361' => 'dango',
			'1F362' => 'oden',
			'1F363' => 'sushi',
			'1F364' => 'fried_shrimp',
			'1F365' => 'fish_cake',
			'1F366' => 'icecream',
			'1F367' => 'shaved_ice',
			'1F368' => 'ice_cream',
			'1F369' => 'doughnut',
			'1F36A' => 'cookie',
			'1F36B' => 'chocolate_bar',
			'1F36C' => 'candy',
			'1F36D' => 'lollipop',
			'1F36E' => 'custard',
			'1F36F' => 'honey_pot',
			'1F370' => 'cake',
			'1F371' => 'bento',
			'1F372' => 'stew',
			'1F373' => 'egg',
			'1F374' => 'fork_and_knife',
			'1F375' => 'tea',
			'1F376' => 'sake',
			'1F377' => 'wine_glass',
			'1F378' => 'cocktail',
			'1F379' => 'tropical_drink',
			'1F37A' => 'beer',
			'1F37B' => 'beers',
			'1F380' => 'ribbon',
			'1F381' => 'gift',
			'1F382' => 'birthday',
			'1F383' => 'jack_o_lantern',
			'1F384' => 'christmas_tree',
			'1F385' => 'santa',
			'1F386' => 'fireworks',
			'1F387' => 'sparkler',
			'1F388' => 'balloon',
			'1F389' => 'tada',
			'1F38A' => 'confetti_ball',
			'1F38B' => 'tanabata_tree',
			'1F38C' => 'crossed_flags',
			'1F38D' => 'bamboo',
			'1F38E' => 'dolls',
			'1F38F' => 'flags',
			'1F390' => 'wind_chime',
			'1F391' => 'rice_scene',
			'1F392' => 'school_satchel',
			'1F393' => 'mortar_board',
			'1F3A0' => 'carousel_horse',
			'1F3A1' => 'ferris_wheel',
			'1F3A2' => 'roller_coaster',
			'1F3A3' => 'fishing_pole_and_fish',
			'1F3A4' => 'microphone',
			'1F3A5' => 'movie_camera',
			'1F3A6' => 'cinema',
			'1F3A7' => 'headphones',
			'1F3A8' => 'art',
			'1F3A9' => 'tophat',
			'1F3AA' => 'circus_tent',
			'1F3AB' => 'ticket',
			'1F3AC' => 'clapper',
			'1F3AD' => 'performing_arts',
			'1F3AE' => 'video_game',
			'1F3AF' => 'dart',
			'1F3B0' => 'slot_machine',
			'1F3B1' => '8ball',
			'1F3B2' => 'game_die',
			'1F3B3' => 'bowling',
			'1F3B4' => 'flower_playing_cards',
			'1F3B5' => 'musical_note',
			'1F3B6' => 'notes',
			'1F3B7' => 'saxophone',
			'1F3B8' => 'guitar',
			'1F3B9' => 'musical_keyboard',
			'1F3BA' => 'trumpet',
			'1F3BB' => 'violin',
			'1F3BC' => 'musical_score',
			
			'1F445' => 'tongue',
			'1F44A' => array('punch', 'facepunch'),
			'1F44F' => 'clap',
			'1F46C' => 'two_men_holding_hands',
			'1F479' => 'japanese_ogre',
			'1F47D' => 'alien',
			'1F480' => 'skull',
			'1F48A' => 'pill',
			'1F4B0' => 'moneybag',
			'1F4F7' => 'camera',
			'1F50A' => 'speaker',
			'1F525' => 'fire',
			'1F52B' => 'gun',
			'1F601' => 'grin',
			'1F602' => 'joy',
			'1F603' => 'smiley',
			'1F604' => 'smile',
			'1F605' => 'sweat_smile',
			'1F606' => 'laughing',
			'1F608' => 'smiling_imp',
			'1F609' => 'wink',
			'1F60A' => 'blush',
			'1F60B' => 'yum',
			'1F60C' => 'relieved',
			'1F60D' => 'heart_eyes',
			'1F60E' => 'sunglasses',
			'1F60F' => 'smirk',
			'1F612' => 'unamused',
			'1F613' => 'sweat',
			'1F614' => 'pensive',
			'1F616' => 'confounded',
			'1F618' => 'kissing_heart',
			'1F61A' => 'kissing_closed_eyes',
			'1F61C' => 'stuck_out_tongue_winking_eye',
			'1F61D' => 'stuck_out_tongue_closed_eyes',
			'1F61E' => 'disappointed',
			'1F620' => 'angry',
			'1F621' => 'rage',
			'1F622' => 'cry',
			'1F623' => 'persevere',
			'1F624' => 'triumph',
			'1F625' => 'disappointed_relieved',
			'1F628' => 'fearful',
			'1F629' => 'weary',
			'1F62A' => 'sleepy',
			'1F62B' => 'tired_face',
			'1F62D' => 'sob',
			'1F630' => 'cold_sweat',
			'1F631' => 'scream',
			'1F632' => 'astonished',
			'1F633' => 'flushed',
			'1F635' => 'dizzy_face',
			'1F637' => 'mask',
			'1F638' => 'smile_cat',
			'1F639' => 'joy_cat',
			'1F63A' => 'smiley_cat',
			'1F63B' => 'heart_eyes_cat',
			'1F63C' => 'smirk_cat',
			'1F63D' => 'kissing_cat',
			'1F63E' => 'pouting_cat',
			'1F63F' => 'crying_cat_face',
			'1F640' => 'scream_cat',
			'1F645' => 'no_good',
			'1F646' => 'ok_woman',
			'1F647' => 'bow',
			'1F648' => 'see_no_evil',
			'1F649' => 'hear_no_evil',
			'1F64A' => 'speak_no_evil',
			'1F64B' => 'raising_hand',
			'1F64C' => 'raised_hands',
			'1F64D' => 'person_frowning',
			'1F64E' => 'person_with_pouting_face',
			'1F64F' => 'pray',
			'1F680' => 'rocket',
			'1F683' => 'railway_car',
			'1F684' => 'bullettrain_side',
			'1F685' => 'bullettrain_front',
			'1F687' => 'metro',
			'1F689' => 'station',
			'1F68C' => 'bus',
			'1F68F' => 'busstop',
			'1F691' => 'ambulance',
			'1F692' => 'fire_engine',
			'1F693' => 'police_car',
			'1F695' => 'taxi',
			'1F697' => 'car',
			'1F699' => 'blue_car',
			'1F69A' => 'truck',
			'1F6A2' => 'ship',
			'1F6A4' => 'speedboat',
			'1F6A5' => 'traffic_light',
			'1F6A7' => 'construction',
			'1F6A8' => 'rotating_light',
			'1F6A9' => 'triangular_flag_on_post',
			'1F6AA' => 'door',
			'1F6AB' => 'no_entry_sign',
			'1F6AC' => 'smoking',
			'1F6AD' => 'no_smoking',
			'1F6B2' => 'bike',
			'1F6B6' => 'walking',
			'1F6B9' => 'mens',
			'1F6BA' => 'womens',
			'1F6BB' => 'restroom',
			'1F6BC' => 'baby_symbol',
			'1F6BD' => 'toilet',
			'1F6BE' => 'wc',
			'1F6C0' => 'bath',
		);
	}
	
	/**
	 * Restituisce la lista degli emoji in base al nome
	 * @access private
	 * @return array
	 */
	private function getListByNames() {
		static $list = null;
		if (!is_array($list)) {
			$list = array();
			foreach ($this->unicode as $k => $v) {
				$v = is_array($v) ? array_values($v) : array($v);
				$counter = count($v);
				for ($i = 0; $i < $counter; $i++) {
					if (!isset($list[$v[$i]])) {
						$list[$v[$i]] = $k;
					}
				}
				unset($i, $counter, $k, $v);
			}
		}
		return $list;
	}
	
	/**
	 * Restituisce il codice HTML dell'emoji in base al nome
	 * @see http://www.emoji-cheat-sheet.com/
	 * @access public
	 * @param string $name nome dell'emoji
	 * @return string
	 */
	public function nameToHtml($name) {
		$html = null;
		if (is_string($name)) {
			$name = trim($name, ':');
			if (trim($name) != '') {
				$list = $this->getListByNames();
				if (isset($list[$name])) {
					$html = '';
					$hex = explode('+', $list[$name]);
					$counter = count($hex);
					for ($i = 0; $i < $counter; $i++) {
						$html .= '&#'.hexdec($hex[$i]).';';
					}
					unset($i, $counter, $hex);
				}
				unset($list);
			}
		}
		return $html;
	}
	
	/**
	 * Sostituisce gli emoji in un testo con il relativo codice HTML in base al nome
	 * @access public
	 * @param string $text testo
	 * @param string $before caratteri iniziali che delimitano un emoji
	 * @param string $after caratteri finali che delimitano un emoji
	 * @return string
	 */
	public function textToHtml($text, $before = ':', $after = ':') {
		if (is_scalar($text)) {
			if (!is_scalar($before)) {
				$before = '';
			}
			if (!is_scalar($after)) {
				$after = '';
			}
			$text = preg_replace_callback(
				'/'.preg_quote($before, '/').'([a-z0-9_]+)'.preg_quote($after, '/').'/s',
				array($this, 'textToHtmlCallback'),
				$text
			);
		} else {
			$text = null;
		}
		return $text;
	}
	
	/**
	 * Callback dell'espressione regolare per sostituire gli emoji in un testo con il relativo codice HTML in base al nome
	 * @see Emoji::textToHtml()
	 * @access private
	 * @param array $matches risultati dell'espressione regolare
	 * @return string
	 */
	private function textToHtmlCallback($matches) {
		$text = null;
		if (is_array($matches)) {
			if (isset($matches[1])) {
				$text = $this->nameToHtml($matches[1]);
			}
			if (!$text && isset($matches[0]) && is_string($matches[0])) {
				$text = $matches[0];
			}
		}
		return $text;
	}
}