export const isNullOrEmpty = array => {
  if (array === undefined) {
    return true;
  }

  if (array === null) {
    return true;
  }

  return array.length === 0;
};
