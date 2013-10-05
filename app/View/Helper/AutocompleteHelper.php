<?php

/**
 * This helper will generate a table for index page
 *
 * @author Vienlemai
 */
class AutocompleteHelper extends AppHelper {

	public $helpers = array('Html');

	public function multiple($data, $id = 'tags', $options = array()) {
		$jsonArray = json_encode($data);
		$script = '$(function() {
		var availableTags = ' . $jsonArray . '
		console.log(availableTags[1]);
		function split( val ) {
			return val.split( /,\s*/ );
		}
		function extractLast( term ) {
			return split( term ).pop();
		}

		$( "#'.$id.'" )
			.bind( "keydown", function( event ) {
				if ( event.keyCode === $.ui.keyCode.TAB &&
						$( this ).data( "ui-autocomplete" ).menu.active ) {
					event.preventDefault();
				}
			})
			.autocomplete({
				minLength: 0,
				source: function( request, response ) {
					// delegate back to autocomplete, but extract the last term
					response( $.ui.autocomplete.filter(
						availableTags, extractLast( request.term ) ) );
				},
				focus: function() {
					// prevent value inserted on focus
					return false;
				},
				select: function( event, ui ) {
					var terms = split( this.value );
					// remove the current input
					terms.pop();
					// add the selected item
					terms.push( ui.item.value );
					// add placeholder to get the comma-and-space at the end
					terms.push( "" );
					this.value = terms.join( ", " );
					return false;
				}
			});
	});';
		echo $this->Html->scriptBlock($script, array('block' => 'scriptBottom'));
	}

	public function single($data, $id = 'tags'){
		$jsonArray = json_encode($data);
		$script = '$(function() {
		var availableTags = '.$jsonArray.';
		$( "#'.$id.'" ).autocomplete({
			source: availableTags
		});
	});';
		echo $this->Html->scriptBlock($script, array('block' => 'scriptBottom'));
	}

}

?>
