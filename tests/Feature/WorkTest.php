<?php


use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class WorkTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function test_work_can_be_stored(): void
    {

        $this->withoutExceptionHandling();

        $data = [
            'title' => 'test title',
            'description' => 'test description',
            'thumbnail' =>  'test thumbnail',
            'sketchfab_url' => 'https://sketchfab.com/models/273c413f7a5340498974b5b86b799f49/embed',
            'mview_path' => 'test mview',
        ];

        $res = $this->post('/work', $data);

        $res->assertStatus(200);
    }
}
