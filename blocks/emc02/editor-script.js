//Required components

var { __ } = wp.i18n; // Process to develop plugin so it can easily be translated to other languages
var { registerBlockType, RichText } = wp.blocks;

registerBlockType("daf/emc02", {
  title: "DAF - Dynamic block Main Content 02",
  description: "Displays a feature post and a list of other posts.",
  icon: "visibility",
  category: "common",
  attributes: {
    blockcategory: { type: "number", default: 0 },
    blockfirststory: { type: "number", default: 0 },
    blocknoofstories: { type: "number", default: 0 },
    blockstoryid: { type: "number", default: 0 },
    blockcolumnsondesktop: { type: "number", default: 12 }
  },

  /* This configures how the content, and sets up the necessary blocks */

  edit: function(props) {
    console.log("emc02 - edit-props", props);
    function updateCategory(event) {
      console.log("Exec function updateCategory");
      props.setAttributes({ blockcategory: parseInt(event.target.value) });
    }
    function updateFirstStory(event) {
      console.log("Exec function updateFirstStory");
      props.setAttributes({ blockfirststory: parseInt(event.target.value) });
    }
    function updateNoOfStories(event) {
      console.log("Exec function updateNoOfStories");
      props.setAttributes({ blocknoofstories: parseInt(event.target.value) });
    }
    function updateStoryId(event) {
      console.log("Exec function updateStoryId");
      props.setAttributes({ blockstoryid: parseInt(event.target.value) });
    }
    function updateColumnsOnDesktop(event) {
      console.log("Exec function updateColumnsOnDesktop");
      props.setAttributes({
        blockcolumnsondesktop: parseInt(event.target.value)
      });
    }

    return React.createElement(
      "div",
      { className: props.className },
      React.createElement("h3", null, "E-MC-02"),
      React.createElement("h4", null, "Category"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blockcategory,
        onChange: updateCategory
      }),
      React.createElement("h4", null, "First Post to load"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blockfirststory,
        onChange: updateFirstStory
      }),
      React.createElement("h4", null, "No. of Post"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blocknoofstories,
        onChange: updateNoOfStories
      }),
      React.createElement("h4", null, "Post Id"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blockstoryid,
        onChange: updateStoryId
      }),
      React.createElement("h4", null, "Columns in Desktop"),
      React.createElement(
        "select",
        {
          class: "input-field",
          value: props.attributes.blockcolumnsondesktop,
          onChange: updateColumnsOnDesktop
        },
        React.createElement("option", { value: "" }, ""),
				React.createElement("option", {value: "12"}, "12 Columns"),
				React.createElement("option", {value: "11"}, "11 Columns"),
				React.createElement("option", {value: "10"}, "10 Columns"),
				React.createElement("option", {value: "9"}, "9 Columns"),
				React.createElement("option", {value: "8"}, "8 Columns"),
				React.createElement("option", {value: "7"}, "7 Columns"),
				React.createElement("option", {value: "6"}, "6 Columns"),
				React.createElement("option", {value: "5"}, "5 Columns"),
				React.createElement("option", {value: "4"}, "4 Columns"),
				React.createElement("option", {value: "3"}, "3 Columns"),
				React.createElement("option", {value: "2"}, "2 Columns"),
				React.createElement("option", {value: "1"}, "1 Column")
      )
    );
  },

  save: function(props) {
    console.log("emc02 - save-props", props);
    return null; // Return controlled by php.
  }
}); //End registerBlockType
