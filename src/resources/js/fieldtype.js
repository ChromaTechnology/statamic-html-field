import HtmlField from './components/html-field.vue';

Statamic.booting(() => {
    Statamic.$components.register('html_field-fieldtype', HtmlField);
});
