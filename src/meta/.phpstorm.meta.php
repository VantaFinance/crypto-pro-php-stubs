<?php

namespace PHPSTORM_META {
	expectedArguments(
		\CPAlgorithm::set_KeyLength(), 0,
		ENCRYPTION_KEY_LENGTH_MAXIMUM | ENCRYPTION_KEY_LENGTH_40_BITS
		| ENCRYPTION_KEY_LENGTH_56_BITS | ENCRYPTION_KEY_LENGTH_128_BITS
		| ENCRYPTION_KEY_LENGTH_192_BITS | ENCRYPTION_KEY_LENGTH_256_BITS
	);

	expectedArguments(
		\CPAlgorithm::set_Name(), 0,
		CADESCOM_ENCRYPTION_ALGORITHM_RC2 | CADESCOM_ENCRYPTION_ALGORITHM_RC4
		| CADESCOM_ENCRYPTION_ALGORITHM_DES | CADESCOM_ENCRYPTION_ALGORITHM_3DES
		| CADESCOM_ENCRYPTION_ALGORITHM_AES
		| CADESCOM_ENCRYPTION_ALGORITHM_GOST_28147_89
	);

	expectedArguments(
		\CPStore::Open, 0,
		MEMORY_STORE | LOCAL_MACHINE_STORE | CURRENT_USER_STORE
		| ACTIVE_DIRECTORY_USER_STORE
	);

	expectedArguments(
		\CPStore::Open, 2,
		STORE_OPEN_MAXIMUM_ALLOWED | STORE_OPEN_READ_ONLY
		| STORE_OPEN_READ_WRITE
	);
}