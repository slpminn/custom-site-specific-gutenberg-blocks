/**
 * Dinamic Page Alert
 * 
 * Creates a block that doesn't render the save side, because it's rendered on PHP
 */


 //Required components
var { __ } = wp.i18n; // Process to develop plugin so it can easily be translated to other languages
var { registerBlockType, RichText } = wp.blocks;

registerBlockType( 'daf/dynamicpagealert', {
	title: 'DAF - Dynamic Page Alert Block',
	description: 'This block will create a feature link with a box around it.',
	icon: 'visibility',
	category: 'common',
	attributes: {
		alerttitle: { type: 'string' },
		alertmessage: { type: 'string' },
		alertlink: { type: 'string' },
    	color: { type: 'string' }
	},

	/* This configures how the content and color fields will work, and sets up the necessary elements */
	
	edit: function( props ) {
		console.log( 'dynamicpagealert - edit-props', props );
		function updateTitle(event) {
			props.setAttributes({alerttitle: event.target.value})
		}
		function updateMessage(event) {
			props.setAttributes({alertmessage: event.target.value})
		}		
		function updateLink(event) {
			props.setAttributes({alertlink: event.target.value})
		}			
		function updateColor(value) {
			props.setAttributes({color: value.hex})
		}
		return React.createElement(
			"div",
			{ className: props.className },
			React.createElement("h3",null,"Page Alert"),
			React.createElement("h4", null, "Alert Title"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.alerttitle, onChange: updateTitle }),
			React.createElement("h4", null, "Alert Message"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.alertmessage, onChange: updateMessage }),
			React.createElement("h4", null, "Alert Link"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.alertlink, onChange: updateLink }),
			React.createElement("h4", null, "Alert Background Color"),
			React.createElement(wp.components.ColorPicker, { color: props.attributes.color, onChangeComplete: updateColor })
		);	
	},

	save: function(props) {
		console.log( 'dynamicpagealert - save-props', props );
		return null; // Return controlled by php.
	}
}); //End registerBlockType

