//Required components

var { __ } = wp.i18n; // Process to develop plugin so it can easily be translated to other languages
var { registerBlockType, RichText } = wp.blocks;

registerBlockType("daf/emc06", {
  title: "DAF - Dynamic block Embed Google Map",
  description: "Include Embed Google Map",
  icon: "visibility",
  category: "common",
  attributes: {
    blockmaptitle: { type: "text" },
    blockmaplink: { type: "text" },
    blockcolumnsondesktop: { type: "text", default: 12 }
  },

  /* This configures how the content, and sets up the necessary blocks */

  edit: function(props) {
    console.log("emc06 - edit-props", props);
    function updateMapTitle(event) {
      console.log("Exec function updateMapTitle");
      props.setAttributes({ blockmaptitle: event.target.value });
    }
    function updateMapLink(event) {
      console.log("Exec function updateMapLink");
      props.setAttributes({ blockmaplink: event.target.value });
    }
    function updateColumnsOnDesktop(event) {
      console.log("Exec function updateColumnsOnDesktop");
      props.setAttributes({ blockcolumnsondesktop: event.target.value });
    } 

       return React.createElement(
      "div",
      { className: props.className },
      React.createElement("h3", null, "E-MC-06"),
      React.createElement("h4", null, "Map Title"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blockmaptitle,
        onChange: updateMapTitle
      }),
      React.createElement("h4", null, "Map Link"),
      React.createElement("input", {
        class: "input-field",
        type: "text",
        value: props.attributes.blockmaplink,
        onChange: updateMapLink
      }),
      React.createElement("h4", null, "Columns in Desktop"),
      React.createElement(
        "select",
        {
          class: "input-field",
          value: props.attributes.blockcolumnsondesktop,
          onChange: updateColumnsOnDesktop
        },
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
    console.log("emc06 - save-props", props);
    return null; // Return controlled by php.
  }
}); //End registerBlockType
