<?php

declare(strict_types=1);

final class CPPrivateKey
{
	/**
	 * Возвращает строку с именем контейнера закрытого ключа
	 *
	 * @return non-empty-string
	 */
	public function get_ContainerName(): string
	{
	}


	/**
	 * Возвращает уникальное имя контейнера закрытого ключа
	 *
	 * @return non-empty-string
	 */
	public function get_UniqueContainerName(): string
	{
	}

	/**
	 * Возвращает имя криптографического провайдера
	 *
	 * @return non-empty-string
	 */
	public function get_ProviderName(): string
	{
	}

	/**
	 * Возвращает тип криптографического провайдера
	 */
	public function get_ProviderType(): int
	{
	}

	/**
	 * Возвращает назначение ключа
	 */
	public function get_KeySpec(): int
	{
	}
}
