/**
 * Dinamic Page Alert
 * 
 * Creates a block that doesn't render the save side, because it's rendered on PHP
 */


 //Required components
/* Defined in previous block
const { __ } = wp.i18n; // Process to develop plugin so it can easily be translated to other languages
const { registerBlockType, RichText } = wp.blocks;
*/

registerBlockType( 'hbi/emc01', {
	title: 'HBI - Dynamic Element Main Content 01',
	description: 'This block will create a feature link with a box around it.',
	icon: 'visibility',
	category: 'common',
	attributes: {
		elementcategory: { type: 'number' },
		elementfirststory: { type: 'number' },
		elementnoofstories: { type: 'number' },
    	elementstoryid: { type: 'number' },
	},

	/* This configures how the content and color fields will work, and sets up the necessary elements */
	
	edit: function( props ) {
		console.log( 'edit-props', props );
		function updateCategory(event) {
			props.setAttributes({elementcategory: event.target.value})
		}
		function updateFirstStory(event) {
			props.setAttributes({elementfirststory: event.target.value})
		}		
		function updateNoOfStories(event) {
			props.setAttributes({elementnoofstories: event.target.value})
		}			
		function updateStoryId(event) {
			props.setAttributes({elementstoryid: event.target.value})
		}
		return React.createElement(
			"div",
			{ className: props.className },
			React.createElement("h3",null,"E-MC-01"),
			React.createElement("h4", null, "Category"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.elementcategory, onChange: updateCategory }),
			React.createElement("h4", null, "First Story"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.elementfirststory, onChange: updateFirstStory }),
			React.createElement("h4", null, "No. of Stories"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.elementnoofstories, onChange: updateNoOfStories }),
			React.createElement("h4", null, "Story Id"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.elementstoryid, onChange: updateStoryId }),
		);	
	},

	save: function(props) {
		console.log( 'save-props', props );
		return null; // Return controlled by php.
	}
}); //End registerBlockType

