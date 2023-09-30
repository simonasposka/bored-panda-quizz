export const getNewOutcomeScore = (outcomeId, outcomeIdToScoreMap) => {
  if (outcomeIdToScoreMap.hasOwnProperty(outcomeId)) {
    return outcomeIdToScoreMap[outcomeId] + 1;
  }

  return 0;
};

export const getOutcomeIdWithHighestScore = outcomeIdToScoreMap => {
  const outcomeIds  = Object.keys(outcomeIdToScoreMap);

  let outcomeIdWithHighestScore = null;
  let max = -1;

  outcomeIds.forEach(outcomeId => {
    const score = outcomeIdToScoreMap[outcomeId];

    if (score > max) {
      max = score;
      outcomeIdWithHighestScore = outcomeId;
    }
  });

  console.log(outcomeIdWithHighestScore);

  return parseInt(outcomeIdWithHighestScore);
};

