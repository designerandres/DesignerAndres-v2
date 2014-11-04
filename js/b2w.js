                 $(document).ready(function() {
                $('#imageslist').behance({
                    apiKey: 'j6fkUUZ8jZJ97BFJmRm2hbGu3nXGqsak',
                    userName: 'AndresAranguibel',
                    detailWrapper: '#projectcontainer',
                    detailContent: '#behance-detail',
                    backToListLink: '#back-to-imageslist',
                    loadingWrapper: '#loading',
                    mediaQueries: [
                        {query: 'screen and (min-width: 1200px)', images: 35}, /* Change the number for total  thumbnails to display For high-resolution desktop monitors  */
                        {query: 'screen and (min-width: 980px) and (max-width: 1199px)', images: 16}, /* Change the number for total  thumbnails to display For normal desktop monitors  */
                        {query: 'screen and (min-width: 768px) and (max-width: 979px)', images: 12}, /* Change the number for total  thumbnails to display tablets in landscape  orientation */
                        {query: 'screen and (max-width: 767px)', images: 12} /* Change the number for total  thumbnails to display For lower resolution mobile devices */
                    ],
                    onImagesLoaded: function(wrapper, data) {
                        //$('li > a', wrapper).tooltip();
                    },
                    onDetailLoaded: function(wrapper, data) {
                        $('.prettyPhoto', wrapper).prettyPhoto({
                            social_tools: false
                        });
                    },
                    itemTemplate: '' +
                            '<li class="mix {{#each fields}} {{replace this " " "-" }}{{/each}}" data-name="{{ name }}" data-publish="{{ published_on }}">' + '    <a id="behance-{{ id }}" href="{{ detailUrl }}" title="{{ name }}">' +
                            '        <img alt="{{ name }}" title="{{ name }}" src="{{ covers.[404] }}" class="cover-img">' +
                            '    </a>' +
                            '    <span class="cover-tag">{{join fields ", " }}</span>' +
                            '</li>',
                    detailTemplate: '' +
                            '<h1>{{ name }}</h1>' +
                            '<div id="descriptioncontainer">' +
                            '<p><strong>Description:</strong> {{ description }}</p>' +
                            '<span id="projectFields"><strong>Artistic field: </strong>{{join fields }}</span>' +
                            '<span id="projectTag"><strong>Tags: </strong>{{join tags }}</span>' +
                            '<span id="projectDate"><strong>Created on: </strong>{{date published_on "MMMM Do YYYY" }}</span>' +
                            '<span id="projectCC"><strong>Copyright: </strong>{{ copyright.license }}</span>' +
                            '<span id="projectLC"><strong>License: </strong>{{ copyright.description }}</span>' +
                            '</div>' +
                            '<ul id="projectImages">' +
                            '    {{#modules}}' +
                            '    <li>' +
                            '        {{#if src}}' +
                            '        {{#if caption}}' +
                            '        {{{ caption }}}' +
                            '        {{/if}}' +
                            '        <a href="{{ sizes.original }}" class="prettyPhotoX" target="_blank" rel="prettyPhoto[pp_gal]">' +
                            '            <img src="{{ src }}" width="{{ width }}" height="{{ height }}">' +
                            '        </a>' +
                            '        {{else}}' +
                            '        {{{ text }}}' +
                            '        {{/if}}' +
                            '    </li>' +
                            '    {{/modules}}' +
                            '</ul>'
                });
            });