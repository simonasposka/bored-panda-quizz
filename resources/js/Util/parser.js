import { isNullOrEmpty } from './global.js';

export const parseOutcomeIdFromAnswer = answer => {
  const answerOutcomes = answer['answer_outcomes'];

  if (isNullOrEmpty(answerOutcomes)) {
    return null;
  }

  return parseOutcomeIdFromOutcomes(answerOutcomes);
};

const parseOutcomeIdFromOutcomes = answerOutcomes => {
  const outcomeId = answerOutcomes[0]['outcome_id'];

  if (isNullOrEmpty(outcomeId)) {
    return null;
  }

  return outcomeId;
};

export const parseCorrectAnswerFromQuestion = question => {
  const correctAnswers = question['correctAnswers'];

  if (isNullOrEmpty(correctAnswers)) {
    return null;
  }

  return correctAnswers[0];
};
