<?php

namespace spec\App\Services;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StyleStripperSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('App\Services\StyleStripper');
    }

    function it_returns_unchanged_html_if_html_has_no_style_attributes()
    {
        $html = '<h1 class="page-title">This is a heading</h1>';
        $this->strip($html)->shouldReturn($html);
    }

    function it_strips_out_entire_style_attribute_from_html_tags()
    {
        $html = '<p class="page-title" style="display: inline;">This is a paragraph</p>';
        $this->strip($html)->shouldReturn('<p class="page-title">This is a paragraph</p>');

        $html2 = file_get_contents('D:/isomark/spec/html_with_style.txt');
        $unstyledHtml = file_get_contents('D:/isomark/spec/html_with_no_style.txt');
        $this->strip($html2)->shouldReturn($unstyledHtml);
    }
}
