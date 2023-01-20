const crypto = require('crypto')
const replace = require('replace-in-file');

async function hash() {
  try {
    // Create Hash
    const hash = crypto.randomBytes(16).toString("hex");

    // Replace Text
    const options = {
      files: './templates/_layout.twig',
      from: 'BUNDLE_HASH',
      to: hash,
    };
    const results = await replace(options)
    console.log('Replacement results:', results);
  }
  catch (error) {
    console.error('Error occurred:', error);
  }
}

hash()
