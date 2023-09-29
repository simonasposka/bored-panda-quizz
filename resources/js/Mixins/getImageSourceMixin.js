import {isImageSourceValid, isImageAltTextValid} from '../Service/ImageValidator.js';

const getImageSourceMixin = {
  methods: {
    getImageSourceForItem(item) {
      if (item.image == null) {
        return '/images/quizz-placeholder.jpg';
      }

      if (!isImageSourceValid(item.image.url)) {
        return '/images/quizz-placeholder.jpg';
      }

      return item.image.url;
    },
    getImageAltTextForItem(item) {
      const defaultPlaceholder = 'Panda laying on it\'s back';

      if (item.image == null) {
        return defaultPlaceholder;
      }

      if (!isImageAltTextValid(item.image.alt)) {
        return defaultPlaceholder;
      }

      return item.image.alt;
    }
  }
}

export default getImageSourceMixin;
