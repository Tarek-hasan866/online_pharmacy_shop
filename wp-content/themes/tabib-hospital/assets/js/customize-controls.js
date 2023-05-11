( function( api ) {

	// Extends our custom "tabib-hospital" section.
	api.sectionConstructor['tabib-hospital'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );