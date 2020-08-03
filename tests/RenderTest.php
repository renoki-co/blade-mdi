<?php

namespace RenokiCo\BladeMdi\Test;

use Illuminate\Support\Str;

class RenderTest extends TestCase
{
    public function test_render()
    {
        $render = view('test')->render();

        $this->assertTrue(
            Str::contains(
                $render,
                '<svg id="some-id" style="color: #555;" some-data="1" class="some-class" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="mdi-account" width="24" height="24" viewBox="0 0 24 24"><path d="M12,4A4,4 0 0,1 16,8A4,4 0 0,1 12,12A4,4 0 0,1 8,8A4,4 0 0,1 12,4M12,14C16.42,14 20,15.79 20,18V20H4V18C4,15.79 7.58,14 12,14Z" /></svg>'
            )
        );
    }
}
