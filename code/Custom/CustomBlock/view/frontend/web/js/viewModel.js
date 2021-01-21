define([
    'uiComponent',
    'ko',
    'jquery',
    'mage/validation'
], function(Component, ko, $) {
    return Component.extend({
        firstName: ko.observable(''),
        email: ko.observable(''),
        phone: ko.observable(''),
        country: ko.observableArray([]),
        fetchedCounties: [],
        GET_COUNTRIES: 'https://restcountries.eu/rest/v2/all',

        initialize: function () {
            this._super();
            var self = this;

            $.ajax({
                showLoader: true,
                url: self.GET_COUNTRIES,
                type: "GET",
                dataType: 'json'
            }).done(function (data) {
                var countries = data.map(function (countrie) {
                    return countrie.name;
                })
                self.fetchedCounties = countries;
                self.country(countries)
            });
        },

        formValid: function (form) {
            $(form).validation();
        },

        clear: function () {
            this.firstName('');
            this.email('');
            this.phone('');
            this.country([]);
            this.country(this.fetchedCounties);
        }
    });
});
