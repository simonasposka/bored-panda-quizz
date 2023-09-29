export const isImageSourceValid = src => {
  if (src === null) {
    return false;
  }

  const trimmedSrc = src.trim();

  return trimmedSrc.length !== 0;
}

export const isImageAltTextValid = altText => {
  if (altText === null) {
    return false;
  }

  const trimmedAltText = altText.trim();

  return trimmedAltText.length !== 0;
}
