<?php

declare(strict_types=1);

/**
 * @copyright 2019 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @author 2019 Christoph Wurst <christoph@winzerhof-wurst.at>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace OCA\SuspiciousLogin\Service\Statistics;

use JsonSerializable;

class TrainingDataStatistics implements JsonSerializable {

	/** @var int */
	private $loginsCaptured;

	/** @var int */
	private $loginsAggregated;

	public function __construct(int $loginsCaptured,
								int $loginsAggregated) {
		$this->loginsCaptured = $loginsCaptured;
		$this->loginsAggregated = $loginsAggregated;
	}

	/**
	 * @return int
	 */
	public function getLoginsCaptured(): int {
		return $this->loginsCaptured;
	}

	/**
	 * @return int
	 */
	public function getLoginsAggregated(): int {
		return $this->loginsAggregated;
	}

	public function jsonSerialize() {
		return [
			'loginsCaptured' => $this->getLoginsCaptured(),
			'loginsAggregated' => $this->getLoginsAggregated(),
		];
	}
}
