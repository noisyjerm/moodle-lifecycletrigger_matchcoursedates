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

$string['pluginname'] = 'Match course date';
$string['privacy:metadata'] = 'This subplugin does not store any personal data.';

$string['earliest'] = 'Earliest start date.';
$string['earliest_help'] = 'The trigger will be invoked if the course start date is after this
                            date and the course end date is before the Latest end date.';
$string['latest'] = 'Latest end date';
$string['latest_help'] = 'Courses with no end date behave as if the end date is 1 January 1970.';
