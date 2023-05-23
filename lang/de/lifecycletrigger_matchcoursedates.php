<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Lang strings for match course dates.
 *
 * @package lifecycletrigger_matchcoursedates
 * @copyright  2023 Te Wānanga o Aotearoa
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Match-Kurstermin - Trigger';
$string['privacy:metadata'] = 'Dieses Subplugin speichert keine persönlichen Daten.';

$string['earliest'] = 'Frühester Starttermin.';
$string['earliest_help'] = 'Der Trigger wird aufgerufen, wenn das Startdatum des Kurses nach diesem Datum und
                            das Enddatum des Kurses vor dem spätesten Enddatum liegt.';
$string['latest'] = 'Spätestes Enddatum';
$string['latest_help'] = 'Kurse ohne Enddatum verhalten sich so, als wäre das Enddatum der 1. Januar 1970.';
