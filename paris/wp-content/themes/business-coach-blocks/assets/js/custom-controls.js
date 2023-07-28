(function(api) {

    api.sectionConstructor['business-coach-blocks-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });

    const business_coach_blocks_section_lists = ['banner', 'service'];
    business_coach_blocks_section_lists.forEach(business_coach_blocks_homepage_scroll);

    function business_coach_blocks_homepage_scroll(item, index) {
        item = item.replace(/-/g, '_');
        wp.customize.section('business_coach_blocks_' + item + '_section', function(section) {
            section.expanded.bind(function(isExpanding) {
                wp.customize.previewer.send(item, { expanded: isExpanding });
            });
        });
    }
})(wp.customize);