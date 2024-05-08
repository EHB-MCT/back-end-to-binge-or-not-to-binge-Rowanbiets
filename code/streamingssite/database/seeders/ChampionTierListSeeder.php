<?php

namespace database\seeders;

use App\Models\ChampionTierList;
use Illuminate\Database\Seeder;

class ChampionTierListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $topChampions = [
            ['role' => 'Top', 'champion_name' => 'Dr. Mundo', 'tier' => 'S', 'win_rate' => 52.9, 'pick_rate' => 4.1, 'ban_rate' => 3.0, 'games_played' => 11029],
            ['role' => 'Top', 'champion_name' => 'Yorick', 'tier' => 'S', 'win_rate' => 52.7, 'pick_rate' => 4.5, 'ban_rate' => 4.7, 'games_played' => 12050],
            ['role' => 'Top', 'champion_name' => 'Trundle', 'tier' => 'S', 'win_rate' => 52.5, 'pick_rate' => 5.0, 'ban_rate' => 4.3, 'games_played' => 13420],
            ['role' => 'Top', 'champion_name' => 'Nasus', 'tier' => 'S', 'win_rate' => 52.4, 'pick_rate' => 5.7, 'ban_rate' => 3.9, 'games_played' => 15378],
            ['role' => 'Top', 'champion_name' => 'Mordekaiser', 'tier' => 'S', 'win_rate' => 52.3, 'pick_rate' => 8.7, 'ban_rate' => 16.6, 'games_played' => 23501],
            ['role' => 'Top', 'champion_name' => 'Warwick', 'tier' => 'A', 'win_rate' => 52.3, 'pick_rate' => 1.4, 'ban_rate' => 3.2, 'games_played' => 3834],
            ['role' => 'Top', 'champion_name' => 'Tahm Kench', 'tier' => 'A', 'win_rate' => 52.2, 'pick_rate' => 3.4, 'ban_rate' => 2.0, 'games_played' => 9142],
            ['role' => 'Top', 'champion_name' => 'Kayle', 'tier' => 'A', 'win_rate' => 52.1, 'pick_rate' => 4.9, 'ban_rate' => 1.3, 'games_played' => 13311],
            ['role' => 'Top', 'champion_name' => 'Urgot', 'tier' => 'A', 'win_rate' => 51.7, 'pick_rate' => 3.4, 'ban_rate' => 1.2, 'games_played' => 9149],
            ['role' => 'Top', 'champion_name' => 'Sett', 'tier' => 'A', 'win_rate' => 51.6, 'pick_rate' => 7.2, 'ban_rate' => 2.1, 'games_played' => 19312],
        ];

        $jungleChampions = [
            ['role' => 'Top', 'champion_name' => 'Dr. Mundo', 'tier' => 'S', 'win_rate' => 52.9, 'pick_rate' => 4.1, 'ban_rate' => 3.0, 'games_played' => 11029],
            ['role' => 'Top', 'champion_name' => 'Yorick', 'tier' => 'S', 'win_rate' => 52.7, 'pick_rate' => 4.5, 'ban_rate' => 4.7, 'games_played' => 12050],
            ['role' => 'Top', 'champion_name' => 'Trundle', 'tier' => 'S', 'win_rate' => 52.5, 'pick_rate' => 5.0, 'ban_rate' => 4.3, 'games_played' => 13420],
            ['role' => 'Top', 'champion_name' => 'Nasus', 'tier' => 'S', 'win_rate' => 52.4, 'pick_rate' => 5.7, 'ban_rate' => 3.9, 'games_played' => 15378],
            ['role' => 'Top', 'champion_name' => 'Mordekaiser', 'tier' => 'S', 'win_rate' => 52.3, 'pick_rate' => 8.7, 'ban_rate' => 16.6, 'games_played' => 23501],
            ['role' => 'Top', 'champion_name' => 'Warwick', 'tier' => 'A', 'win_rate' => 52.3, 'pick_rate' => 1.4, 'ban_rate' => 3.2, 'games_played' => 3834],
            ['role' => 'Top', 'champion_name' => 'Tahm Kench', 'tier' => 'A', 'win_rate' => 52.2, 'pick_rate' => 3.4, 'ban_rate' => 2.0, 'games_played' => 9142],
            ['role' => 'Top', 'champion_name' => 'Kayle', 'tier' => 'A', 'win_rate' => 52.1, 'pick_rate' => 4.9, 'ban_rate' => 1.3, 'games_played' => 13311],
            ['role' => 'Top', 'champion_name' => 'Urgot', 'tier' => 'A', 'win_rate' => 51.7, 'pick_rate' => 3.4, 'ban_rate' => 1.2, 'games_played' => 9149],
            ['role' => 'Top', 'champion_name' => 'Sett', 'tier' => 'A', 'win_rate' => 51.6, 'pick_rate' => 7.2, 'ban_rate' => 2.1, 'games_played' => 19312],
        ];

        $midChampions = [
            ['role' => 'Mid', 'champion_name' => 'Zed', 'tier' => 'S', 'win_rate' => 52.9, 'pick_rate' => 8.1, 'ban_rate' => 12.3, 'games_played' => 40231],
            ['role' => 'Mid', 'champion_name' => 'Talon', 'tier' => 'S', 'win_rate' => 52.7, 'pick_rate' => 7.9, 'ban_rate' => 14.7, 'games_played' => 38215],
            ['role' => 'Mid', 'champion_name' => 'Yasuo', 'tier' => 'S', 'win_rate' => 52.5, 'pick_rate' => 12.2, 'ban_rate' => 20.9, 'games_played' => 51234],
            ['role' => 'Mid', 'champion_name' => 'Fizz', 'tier' => 'S', 'win_rate' => 52.4, 'pick_rate' => 10.7, 'ban_rate' => 9.8, 'games_played' => 45789],
            ['role' => 'Mid', 'champion_name' => 'Ekko', 'tier' => 'S', 'win_rate' => 52.3, 'pick_rate' => 9.5, 'ban_rate' => 13.1, 'games_played' => 41321],
            ['role' => 'Mid', 'champion_name' => 'Viktor', 'tier' => 'A', 'win_rate' => 52.1, 'pick_rate' => 6.7, 'ban_rate' => 5.2, 'games_played' => 33201],
            ['role' => 'Mid', 'champion_name' => 'Katarina', 'tier' => 'A', 'win_rate' => 52.0, 'pick_rate' => 8.9, 'ban_rate' => 6.1, 'games_played' => 37912],
            ['role' => 'Mid', 'champion_name' => 'Annie', 'tier' => 'A', 'win_rate' => 51.9, 'pick_rate' => 7.2, 'ban_rate' => 4.9, 'games_played' => 30128],
            ['role' => 'Mid', 'champion_name' => 'Veigar', 'tier' => 'A', 'win_rate' => 51.8, 'pick_rate' => 5.8, 'ban_rate' => 3.4, 'games_played' => 27781],
            ['role' => 'Mid', 'champion_name' => 'Twisted Fate', 'tier' => 'A', 'win_rate' => 51.7, 'pick_rate' => 9.1, 'ban_rate' => 2.0, 'games_played' => 38901],
        ];

        $adcChampions = [
            ['role' => 'ADC', 'champion_name' => 'Jhin', 'tier' => 'S', 'win_rate' => 53.1, 'pick_rate' => 11.5, 'ban_rate' => 7.8, 'games_played' => 44291],
            ['role' => 'ADC', 'champion_name' => 'Samira', 'tier' => 'S', 'win_rate' => 52.9, 'pick_rate' => 10.2, 'ban_rate' => 16.5, 'games_played' => 50123],
            ['role' => 'ADC', 'champion_name' => 'Kai\'Sa', 'tier' => 'S', 'win_rate' => 52.7, 'pick_rate' => 14.9, 'ban_rate' => 10.2, 'games_played' => 58321],
            ['role' => 'ADC', 'champion_name' => 'Aphelios', 'tier' => 'S', 'win_rate' => 52.5, 'pick_rate' => 9.8, 'ban_rate' => 13.3, 'games_played' => 46201],
            ['role' => 'ADC', 'champion_name' => 'Caitlyn', 'tier' => 'S', 'win_rate' => 52.4, 'pick_rate' => 10.5, 'ban_rate' => 5.7, 'games_played' => 50122],
            ['role' => 'ADC', 'champion_name' => 'Ezreal', 'tier' => 'A', 'win_rate' => 52.2, 'pick_rate' => 12.3, 'ban_rate' => 5.9, 'games_played' => 52987],
            ['role' => 'ADC', 'champion_name' => 'Miss Fortune', 'tier' => 'A', 'win_rate' => 52.1, 'pick_rate' => 8.7, 'ban_rate' => 3.8, 'games_played' => 39812],
            ['role' => 'ADC', 'champion_name' => 'Kog\'Maw', 'tier' => 'A', 'win_rate' => 52.0, 'pick_rate' => 6.5, 'ban_rate' => 2.1, 'games_played' => 31123],
            ['role' => 'ADC', 'champion_name' => 'Tristana', 'tier' => 'A', 'win_rate' => 51.9, 'pick_rate' => 7.9, 'ban_rate' => 2.3, 'games_played' => 33721],
            ['role' => 'ADC', 'champion_name' => 'Varus', 'tier' => 'A', 'win_rate' => 51.8, 'pick_rate' => 5.3, 'ban_rate' => 4.5, 'games_played' => 27819],
        ];

        $supportChampions = [
            ['role' => 'Support', 'champion_name' => 'Leona', 'tier' => 'S', 'win_rate' => 53.2, 'pick_rate' => 12.1, 'ban_rate' => 8.3, 'games_played' => 45231],
            ['role' => 'Support', 'champion_name' => 'Lulu', 'tier' => 'S', 'win_rate' => 53.0, 'pick_rate' => 11.5, 'ban_rate' => 6.9, 'games_played' => 41328],
            ['role' => 'Support', 'champion_name' => 'Blitzcrank', 'tier' => 'S', 'win_rate' => 52.8, 'pick_rate' => 9.8, 'ban_rate' => 11.2, 'games_played' => 38942],
            ['role' => 'Support', 'champion_name' => 'Thresh', 'tier' => 'S', 'win_rate' => 52.6, 'pick_rate' => 14.2, 'ban_rate' => 9.8, 'games_played' => 52201],
            ['role' => 'Support', 'champion_name' => 'Nautilus', 'tier' => 'S', 'win_rate' => 52.5, 'pick_rate' => 10.5, 'ban_rate' => 8.7, 'games_played' => 46281],
            ['role' => 'Support', 'champion_name' => 'Janna', 'tier' => 'A', 'win_rate' => 52.3, 'pick_rate' => 7.9, 'ban_rate' => 4.6, 'games_played' => 36129],
            ['role' => 'Support', 'champion_name' => 'Soraka', 'tier' => 'A', 'win_rate' => 52.2, 'pick_rate' => 8.3, 'ban_rate' => 5.2, 'games_played' => 37912],
            ['role' => 'Support', 'champion_name' => 'Bard', 'tier' => 'A', 'win_rate' => 52.1, 'pick_rate' => 6.5, 'ban_rate' => 2.8, 'games_played' => 31901],
            ['role' => 'Support', 'champion_name' => 'Morgana', 'tier' => 'A', 'win_rate' => 52.0, 'pick_rate' => 9.1, 'ban_rate' => 6.1, 'games_played' => 41123],
            ['role' => 'Support', 'champion_name' => 'Nami', 'tier' => 'A', 'win_rate' => 51.9, 'pick_rate' => 7.5, 'ban_rate' => 3.4, 'games_played' => 33128],
        ];

        // Voeg top champions toe
        foreach ($topChampions as $champion) {
            ChampionTierList::create($champion);
        }

        // Voeg jungle champions toe
        foreach ($jungleChampions as $champion) {
            ChampionTierList::create($champion);
        }

        // Voeg mid champions toe
        foreach ($midChampions as $champion) {
            ChampionTierList::create($champion);
        }

        // Voeg adc champions toe
        foreach ($adcChampions as $champion) {
            ChampionTierList::create($champion);
        }

        // Voeg support champions toe
        foreach ($supportChampions as $champion) {
            ChampionTierList::create($champion);
        }
    }
}
