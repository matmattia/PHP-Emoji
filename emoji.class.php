<?php
/**
 * Emoji Class
 * 
 * @name emoji.class.php
 * @author Mattia - http://www.matriz.it
 * @version 1.0.0
 * @date April 20, 2014
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
		$this->unicode = array(
			'1F341' => 'maple_leaf',
			'1F342' => 'fallen_leaf',
			'1F383' => 'jack_o_lantern',
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
			$hex = array_search($name, $this->unicode);
			if ($hex !== false) {
				$html = '&#'.hexdec($hex).';';
			}
		}
		return $html;
	}
}