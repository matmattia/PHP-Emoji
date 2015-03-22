<?php
/**
 * Emoji Class
 * 
 * @name emoji.class.php
 * @author Mattia - http://www.matriz.it
 * @version 1.0.2
 * @date July 5, 2014
 * @category PHP Class
 * @copyright (c) 2014 Mattia at Matriz.it (info@matriz.it)
 * @license MIT - http://opensource.org/licenses/mit-license.php
 * @example Visit http://www.matriz.it/projects/php-emoji/ for more informations about this PHP class
 */

class Emoji {
	/**
	 * Lista degli emoji in base all'Unicode
	 * @private
	 * @var array
	 */
	private $unicode = array();
	
 	/**
	 * Costruttore della classe
	 * @public
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
			'2747' => '',
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
			'1F341' => 'maple_leaf',
			'1F342' => 'fallen_leaf',
			'1F382' => 'birthday',
			'1F383' => 'jack_o_lantern',
			'1F386' => 'fireworks',
			'1F388' => 'balloon',
			'1F389' => 'tada',
			'1F3B6' => 'notes',
			'1F44F' => 'clap',
			'1F46C' => 'two_men_holding_hands',
			'1F479' => 'japanese_ogre',
			'1F47D' => 'alien',
			'1F480' => 'skull',
			'1F4F7' => 'camera',
			'1F50A' => 'speaker',
			'1F601' => 'grin',
			'1F602' => 'joy',
			'1F603' => 'smiley',
			'1F604' => 'smile',
			'1F605' => 'sweat_smile',
			'1F606' => 'laughing',
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
	 * Restituisce il codice HTML dell'emoji in base al nome
	 * @see http://www.emoji-cheat-sheet.com/
	 * @public
	 * @param string $name nome dell'emoji
	 * @return string
	 */
	public function nameToHtml($name) {
		$html = null;
		if (is_string($name)) {
			$name = trim($name, ':');
			$k = array_search($name, $this->unicode);
			if ($k !== false) {
				$html = '';
				$hex = explode('+', $k);
				$counter = count($hex);
				for ($i = 0; $i < $counter; $i++) {
					$html .= '&#'.hexdec($hex[$i]).';';
				}
				unset($i, $counter, $hex);
			}
			unset($k);
		}
		return $html;
	}
}