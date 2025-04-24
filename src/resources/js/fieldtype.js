import HtmlField from './components/html-field';

Statamic.booting(() => {
    Statamic.$components.register('html_field-fieldtype', HtmlField);
});
