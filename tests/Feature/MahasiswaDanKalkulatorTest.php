<?php

namespace Tests\Feature;

use Tests\TestCase;

class MahasiswaDanKalkulatorTest extends TestCase
{
    public function test_daftar_mahasiswa_menampilkan_seluruh_data(): void
    {
        $response = $this->get('/daftar/mahasiswa');

        $response->assertOk()
            ->assertSee('Daftar Mahasiswa')
            ->assertSee('Anton')
            ->assertSee('Surabaya')
            ->assertSee('Budi')
            ->assertSee('Kediri')
            ->assertSee('Ani')
            ->assertSee('Malang')
            ->assertSee('Sinta');
    }

    public function test_kalkulator_menghitung_luas_segitiga(): void
    {
        $response = $this->post('/kalkulator/segitiga', [
            'alas' => 10,
            'tinggi' => 8,
        ]);

        $response->assertOk()
            ->assertSee('Luas Segitiga')
            ->assertSee('40,00')
            ->assertSee('satuan persegi');
    }

    public function test_halaman_kalkulator_menampilkan_form_input(): void
    {
        $response = $this->get('/kalkulator/segitiga');

        $response->assertOk()
            ->assertSee('name="alas"', false)
            ->assertSee('name="tinggi"', false)
            ->assertSee('1/2 × alas × tinggi');
    }

    public function test_kalkulator_menolak_nilai_non_positif(): void
    {
        $response = $this->from('/kalkulator/segitiga')
            ->post('/kalkulator/segitiga', [
                'alas' => 0,
                'tinggi' => 8,
            ]);

        $response->assertRedirect('/kalkulator/segitiga')
            ->assertSessionHasErrors('alas');
    }
}
