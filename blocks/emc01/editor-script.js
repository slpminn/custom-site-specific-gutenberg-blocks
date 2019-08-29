/**
 * Dinamic Page Alert
 * 
 * Creates a block that doesn't render the save side, because it's rendered on PHP
 */


 //Required components

var { __ } = wp.i18n; // Process to develop plugin so it can easily be translated to other languages
var { registerBlockType, RichText } = wp.blocks;


registerBlockType( 'daf/emc01', {
	title: 'DAF - Dynamic block Main Content 01',
	description: 'This block will create a feature link with a box around it.',
	icon: 'visibility',
	category: 'common',
	attributes: {
		blockcategory: { type: 'number', default: 0  },
		blockfirststory: { type: 'number', default: 0  },
		blocknoofstories: { type: 'number', default: 0  },
		blockstoryid: { type: 'number', default: 0 },
		blockcolumnsondesktop: { type: 'number', default: 12 },
	},

	/* This configures how the content, and sets up the necessary blocks */
	
	edit: function(props) {
		console.log( 'emc01 - edit-props', props );
		function updateCategory(event) {
			console.log('Exec function updateCategory');
			props.setAttributes({blockcategory: parseInt(event.target.value)})
		}
		function updateFirstStory(event) {
			console.log('Exec function updateFirstStory');
			props.setAttributes({blockfirststory: parseInt(event.target.value)})
		}		
		function updateNoOfStories(event) {
			console.log('Exec function updateNoOfStories');
			props.setAttributes({blocknoofstories: parseInt(event.target.value)})
		}			
		function updateStoryId(event) {
			console.log('Exec function updateStoryId');
			props.setAttributes({blockstoryid: parseInt(event.target.value)})
		}
		function updateColumnsOnDesktop(event) {
			console.log('Exec function updateColumnsOnDesktop');
			props.setAttributes({blockcolumnsondesktop: parseInt(event.target.value)})
		}

		return React.createElement(
			"div",
			{ className: props.className },
			React.createElement("h3",null,"E-MC-01"),
			React.createElement("h4", null, "Category"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.blockcategory, onChange: updateCategory }),
			React.createElement("h4", null, "First Story"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.blockfirststory, onChange: updateFirstStory }),
			React.createElement("h4", null, "No. of Stories"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.blocknoofstories, onChange: updateNoOfStories }),
			React.createElement("h4", null, "Story Id"),
			React.createElement("input", { class: "input-field", type: "text", value: props.attributes.blockstoryid, onChange: updateStoryId }),
			React.createElement("h4", null, "Columns in Desktop"),
			React.createElement("select", { class: "input-field", value: props.attributes.blockcolumnsondesktop, onChange: updateColumnsOnDesktop }, 
				React.createElement("option", {value: "12"}, "12 Columns"),
				React.createElement("option", {value: "6"}, "6 Columns"),
				React.createElement("option", {value: "4"}, "4 Columns"),
				React.createElement("option", {value: "2"}, "2 Columns") 
				),
		);	
	},

	save: function(props) {
		console.log( 'emc01 - save-props', props );
		return null; // Return controlled by php.
	}
}); //End registerBlockType

